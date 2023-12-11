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
page, JSON data, etc.

helmet added for added security using https headers
morgan request logger - sees incoming requests in dev env
 */

// Importing necessary modules
const express = require('express');
const session = require('express-session');
const passport = require('passport');
const cors = require('cors'); 
const helmet = require('helmet'); 
const morgan = require('morgan');

// Routers
const productsRouter = require('./routes/productsRouter');
const usersRouter = require('./routes/usersRouter');
const ordersRouter = require('./routes/ordersRouter');
const adminOrdersRouter = require('./routes/admin/orders');
const adminProductsRouter = require('./routes/admin/products');
const adminUsersRouter = require('./routes/admin/users');

// Load environment variables
require('dotenv').config();

// Initialize Express app
const app = express();

app.use(helmet()); 
app.use(cors());
app.use(morgan('dev'));

// Middleware for parsing JSON
app.use(express.json());

// Passport Config
require('./js/passportConfig')(passport);

// Express session setup
app.use(session({
    secret: process.env.SESSION_SECRET || 'secret', // Use environment variable for final submission
    resave: true,
    saveUninitialized: true
}));

// Passport middleware for authentication
app.use(passport.initialize());
app.use(passport.session());

// Error handling middleware
app.use((err, req, res, next) => {
    console.error(err.stack);
    res.status(500).send('Something went wrong!');
});

// Using routers
app.use('/api/products', productsRouter);
app.use('/api/users', usersRouter);
app.use('/api/orders', ordersRouter);
app.use('/admin/orders', adminOrdersRouter);
app.use('/admin/products', adminProductsRouter);
app.use('/admin/users', adminUsersRouter);

// Catch 404 and forward to error handler
app.use((req, res, next) => {
    res.status(404).send('Page not found');
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));

// Export app for testing purposes
module.exports = app;




/*

include admin routes 
const adminOrdersRouter = require('./routes/admin/orders');
const adminProductsRouter = require('./routes/admin/products');
const adminUsersRouter = require('./routes/admin/users');


*/
