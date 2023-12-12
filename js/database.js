// file for connecting database with Sequelize
// credentials stored as environmental variables for security purposes

require('dotenv').config(); // No path specified, it will look for .env in the project root
const { Sequelize } = require('sequelize');

// Using environment variables for database credentials
const sequelize = new Sequelize(
  process.env.DB_NAME,    // Database name
  process.env.DB_USER,    // Database username
  process.env.DB_PASSWORD,  // Database password
  {
    host: process.env.DB_HOST, // Database host
    dialect: 'mysql',
    logging: console.log, // set true to see SQL log in console
  }
);

module.exports = sequelize;

/*
// Test the database connection
sequelize.authenticate()
  .then(() => {
    console.log('Connection to the database has been established successfully.');
  })
  .catch(err => {
    console.error('Unable to connect to the database:', err);
  });

module.exports = sequelize;
*/
