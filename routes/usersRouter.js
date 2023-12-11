const express = require('express');
const bcrypt = require('bcrypt');
const passport = require('passport');
const { body, validationResult } = require('express-validator');
const Client = require('../models/Clients');
const Admin = require('../models/Admin');
const router = express.Router();

// Password validation function
const validatePassword = (password) => {
    const minLength = 8; // Define minimum length
    const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password); // Check for special characters
    return password.length >= minLength && hasSpecialChar;
};

// Client registration route
router.post('/register', [
    body('username').trim().escape(),
    body('email').isEmail().normalizeEmail(),
    body('phoneNumber').trim().escape(),
    body('firstName').trim().escape(),
    body('lastName').trim().escape(),
    body('password').isLength({ min: 8 }).matches(/[!@#$%^&*(),.?":{}|<>]/),
], async (req, res) => {
    // Check for validation errors
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
        return res.status(400).json({ errors: errors.array() });
    }

    try {
        // Destructure sanitized values
        const { username, password, email, phoneNumber, firstName, lastName } = req.body;

        // Hash password
        const hashedPassword = await bcrypt.hash(password, 10);

        // Store client with hashed password in the database
        await Client.create({
            Username: username,
            Password: hashedPassword,
            Email: email,
            PhoneNumber: phoneNumber,
            FirstName: firstName,
            LastName: lastName
        });

        res.status(201).send('Client registered successfully');
    } catch (error) {
        res.status(500).send("Failed to register client: " + error.message);
    }
});


// Client login route
router.post('/login', (req, res, next) => {
    passport.authenticate('local', async (err, client, info) => {
        if (err) { return next(err); }
        if (!client) { 
            // Respond with error for SPA/AJAX
            return res.status(401).json({ message: info.message || 'Login failed' }); 
        }

        req.logIn(client, async (err) => {
            if (err) { return next(err); }

            // Check if user is an admin
            const admin = await Admin.findOne({ where: { Username: client.Username } });
            const isAdmin = admin != null;

            // Respond with success message and admin status
            return res.json({ message: 'Logged in successfully', isAdmin });
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
