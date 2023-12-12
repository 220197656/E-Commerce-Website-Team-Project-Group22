const express = require('express');
const bcrypt = require('bcrypt');
const passport = require('passport');
const Client = require('../models/Client'); 
const router = express.Router();

// Password validation function
const validatePassword = (password) => {
    const minLength = 8; // Define minimum length
    const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password); // Check for special characters
    return password.length >= minLength && hasSpecialChar;
};

// Client registration route
router.post('/register', async (req, res) => {
    try {
        // Validate request data
        const { username, password, email, phoneNumber, firstName, lastName } = req.body;

        // Validate password
        if (!validatePassword(password)) {
            return res.status(400).send('Password does not meet security requirements.');
        }

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

        // Redirect or respond for a SPA/AJAX frontend
        res.status(201).send('Client registered successfully');
    } catch (error) {
        res.status(500).send("Failed to register client: " + error.message);
    }
});

// Define hardcoded admin and client credentials
const adminCredentials = {
    username: 'leadadmin',
    password: 'eRvLwWTrU7pw',
};

const clientCredentials = {
    username: 'testaccount',
    password: 'testpassword123',
};

// Client login route
router.post('/login', async (req, res) => {
    const { username, password } = req.body;

    if (username === adminCredentials.username && password === adminCredentials.password) {
        // Admin login successful, redirect to admin dashboard
        return res.redirect('/html/admin.html');
    } else if (username === clientCredentials.username && password === clientCredentials.password) {
        // Client login successful, redirect to the homepage
        return res.redirect('/');
    } else {
        // Authentication failed, you can return an error message or redirect to a login page
        return res.status(401).json({ message: 'Login failed' });
    }
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
