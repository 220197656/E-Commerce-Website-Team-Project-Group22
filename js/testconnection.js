async function testConnection() {
    try {
      console.log("Starting database connection test...");
      const sequelize = require('../js/database');

  
      await sequelize.authenticate();
      console.log('Connection has been established successfully.');
    } catch (err) {
      console.error('Unable to connect to the database:', err);
    }
  }
  
  testConnection();