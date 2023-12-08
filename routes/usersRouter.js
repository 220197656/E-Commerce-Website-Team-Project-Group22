const express = require('express');
const bcrypt = require('bcrypt');
const passport = require('passport');
const Client = require('../models/client'); 
const router = express.Router();

// Client registration route
router.post('/register', async (req, res) => {
    try {
        // Validate request data
        const hashedPassword = await bcrypt.hash(req.body.password, 10);
        // Store client with hashed password in the database
        await Client.create({
            Username: req.body.username,
            Password: hashedPassword,
            //Might need to store other parameters
        });

        // Redirect or respond for a SPA/AJAX frontend
        res.status(201).send('Client registered successfully');
    } catch (error) {
        res.status(500).send("Failed to register client: " + error.message);
    }
});

// Client login route
router.post('/login', (req, res, next) => {
    passport.authenticate('local', (err, client, info) => {
        if (err) { return next(err); }
        if (!client) { 
            // Respond with error for SPA/AJAX
            return res.status(401).json({ message: info.message || 'Login failed' }); 
        }

        req.logIn(client, (err) => {
            if (err) { return next(err); }
            // Respond with success message
            return res.json({ message: 'Logged in successfully' });
        });
    })(req, res, next);
});

// Middleware to protect routes
function ensureAuthenticated(req, res, next) {
    if (req.isAuthenticated()) {
        return next();
    }
    // Respond with error for non-authenticated access
    res.status(401).send('Access denied. Please log in.');
}

// Protected route - Client profile
router.get('/profile', ensureAuthenticated, (req, res) => {
    // Send back client profile data
    res.json(req.user); 
});

// Logout route
router.get('/logout', (req, res) => {
    req.logout();
    res.send('Logged out successfully');
});

module.exports = router;
