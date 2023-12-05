/*
Description of this file:

app.js is  main server file. 
It's responsible for setting up  server, defining routes, handling 
requests, and integrating middleware (like Passport for authentication).
It acts as the entry point to  backend application. When running the
Node.js server, it's app.js that gets executed. */

/*The frontend (HTML, CSS, JavaScript) interacts with the backend 
(Node.js/Express server/ sequelize) through HTTP requests. For instance, when 
a user submits a login form on the index.html page, it sends a 
request to a route on the server defined in app.js.
The server processes this request (e.g., authenticates the user) 
and sends back a response, which could be a redirection to another 
page, JSON data, etc. */

//Import the .env file
require('dotenv').config();



//Import the associations file here


// Importing necessary modules
const express = require('express');
const session = require('express-session');
const passport = require('passport');
const productsRouter = require('./routes/productsRouter');
const usersRouter = require('./routes/usersRouter');
const ordersRouter = require('./routes/ordersRouter');
const adminRouter = require('./routes/adminRouter');

// Import the .env file
require('dotenv').config();

// Initialize Express app
const app = express();

// Middlewares
app.use(express.json());

// Passport Configuration
require('./passportConfig')(passport);

// Express session setup
app.use(session({
    secret: 'secret', // Replace with environment variable in production
    resave: true,
    saveUninitialized: true
}));

// Passport middleware
app.use(passport.initialize());
app.use(passport.session());

// Using routers
app.use('/api/products', productsRouter);
app.use('/api/users', usersRouter);
app.use('/api/orders', ordersRouter);
app.use('/api/admin', adminRouter);

// Additional app configuration goes here

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));

// Export app if needed for testing
module.exports = app;



