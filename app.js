// Importing necessary modules
const express = require('express');
const session = require('express-session');
const cors = require('cors'); 
const helmet = require('helmet'); 
const morgan = require('morgan');

// Load environment variables
require('dotenv').config();

// Initialize Express app
const app = express();

// Set up middlewares
app.use(helmet()); 
app.use(cors());
app.use(morgan('dev'));
app.use(express.json()); // Middleware for parsing JSON

// Express session setup
app.use(session({
    secret: process.env.SESSION_SECRET || 'secret', // Use environment variable for final submission
    resave: true,
    saveUninitialized: true
}));

// Root route
app.get('/', (req, res) => {
    res.send('Welcome to My Node.js App!');
});

// Routers
const productsRouter = require('./routes/productsRouter');
const usersRouter = require('./routes/usersRouter');
const ordersRouter = require('./routes/ordersRouter');
const adminOrdersRouter = require('./routes/admin/orders');
const adminProductsRouter = require('./routes/admin/products');
const adminUsersRouter = require('./routes/admin/users');

// Using routers
app.use('/api/products', productsRouter);
app.use('/api/users', usersRouter);
app.use('/api/orders', ordersRouter);
app.use('/admin/orders', adminOrdersRouter);
app.use('/admin/products', adminProductsRouter);
app.use('/admin/users', adminUsersRouter);

// Error handling middleware
app.use((err, req, res, next) => {
    console.error(err.stack);
    res.status(500).send('Something went wrong!');
});

// Catch 404 and forward to error handler
app.use((req, res, next) => {
    res.status(404).send('Page not found');
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));

// Export app for testing purposes
module.exports = app;
