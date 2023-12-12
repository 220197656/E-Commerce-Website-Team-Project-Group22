const express = require('express');
const bcrypt = require('bcrypt');
//const passport = require('passport'); Commented out all passport 
const { body, validationResult } = require('express-validator');
const Client = require('../models/Client');
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
    // Debug code to log the request body
    console.log('Register endpoint hit', req.body); 

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

        // Debug code to log before creating a new client
        console.log('Attempting to create client:', { username, email });

        // Store client with hashed password in the database
        await Client.create({
            Username: username,
            Password: hashedPassword,
            Email: email,
            PhoneNumber: phoneNumber,
            FirstName: firstName,
            LastName: lastName
        });

        // Debug code to confirm successful registration
        console.log('Client registered successfully'); 

        res.status(201).send('Client registered successfully');
    } catch (error) {
        // Debug code to log any errors during registration
        console.error('Error registering client:', error);

        res.status(500).send("Failed to register client: " + error.message);
    }
});

// Basic login route
router.post('/login', async (req, res) => {
    console.log('Login endpoint hit', req.body); // Debug code

    const { username, password } = req.body;
    try {
        const client = await Client.findOne({ where: { Username: username } });
        if (client && await bcrypt.compare(password, client.Password)) {
            // User authenticated, set user info in session
            req.session.user = { id: client.ClientID, username: client.Username, isAdmin: false };

            // Check if user is an admin
            const admin = await Admin.findOne({ where: { Username: username } });
            if (admin) {
                req.session.user.isAdmin = true; // Set isAdmin flag in session
            }

            console.log('Login successful for user:', username); // Debug code
            return res.json({ message: 'Logged in successfully', isAdmin: req.session.user.isAdmin });
        } else {
            console.log('Login failed for user:', username); // Debug code
            res.status(401).json({ message: 'Login failed' });
        }
    } catch (error) {
        console.error('Error during login:', error); // Debug code
        res.status(500).json({ message: 'An error occurred during login' });
    }
});

// Logout route
router.get('/logout', (req, res) => {
    console.log('Logout endpoint hit'); // Debug code
    if (req.session) {
        req.session.destroy(err => {
            if (err) {
                return res.status(500).send('Error occurred in logging out');
            }
            res.send('Logged out successfully');
        });
    } else {
        res.end();
    }
});

/*
// Client login route passport version
router.post('/login', (req, res, next) => {
    console.log('Login endpoint hit', req.body); // Debug code

    passport.authenticate('local', async (err, client, info) => {
        console.log('Passport authenticate callback', { err, client, info }); // Debug code

        if (err) { 
            console.error('Error during authentication', err); // Debug code
            return next(err); 
        }
        if (!client) { 
            console.log('Authentication failed, no client found'); // Debug code
            return res.status(401).json({ message: info.message || 'Login failed' }); 
        }

        req.logIn(client, async (err) => {
            console.log('req.logIn callback', { err }); // Debug code

            if (err) { 
                console.error('Error during login session setup', err); // Debug code
                return next(err); 
            }

            // Check if user is an admin
            const admin = await Admin.findOne({ where: { Username: client.Username } });
            console.log('Admin check', { admin }); // Debug code

            const isAdmin = admin != null;
            return res.json({ message: 'Logged in successfully', isAdmin });
        });
    })(req, res, next);
});


// Middleware to protect routes
function ensureAuthenticated(req, res, next) {
    console.log('ensureAuthenticated middleware called'); // Debug code

    if (req.isAuthenticated()) {
        console.log('User is authenticated'); // Debug code
        return next();
    }

    console.log('User not authenticated'); // Debug code
    res.status(401).send('Access denied. Please log in.');
}

// Protected route - Client profile
router.get('/profile', ensureAuthenticated, (req, res) => {
    console.log('Profile endpoint hit'); // Debug code
    res.json(req.user); // Send back client profile data
});

// Logout route
router.get('/logout', (req, res) => {
    console.log('Logout endpoint hit'); // Debug code
    req.logout();
    res.send('Logged out successfully');
});
*/
module.exports = router;
