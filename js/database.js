// database.js
const { Sequelize } = require('sequelize');

console.log('Initializing Sequelize'); // Debug code

// Using environment variables for database credentials
const sequelize = new Sequelize(
  process.env.DB_NAME,    
  process.env.DB_USER,    
  process.env.DB_PASSWORD,  
  {
    host: process.env.DB_HOST, // Database host
    dialect: 'mysql',
    logging: console.log, // Enable logging for SQL queries
  }
);

// Test the database connection
sequelize.authenticate()
  .then(() => {
    console.log('Connection to the database has been established successfully.');
  })
  .catch(err => {
    console.error('Unable to connect to the database:', err);
  });

module.exports = sequelize;
