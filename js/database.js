// file for connecting database with Sequelize
// credentials stored as environmental variables for security purposes

require('dotenv').config({ path: '../.env' });
const { Sequelize } = require('sequelize');

// Using environment variables for database credentials
const sequelize = new Sequelize(
  process.env.DB_NAME,    // Database name
  process.env.DB_USER,    // Database username
  process.env.DB_PASSWORD,  // Database password
  {
    host: process.env.DB_HOST, // Database host
    dialect: 'mysql',
    logging: false, // Optional: set to true if you want to see SQL log in the console
  }
);

module.exports = sequelize;
