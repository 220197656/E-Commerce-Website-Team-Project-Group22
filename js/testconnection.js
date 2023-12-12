async function testConnection() {
    try {
      console.log("Starting database connection test...");
      const sequelize = require('./database'); // Adjust the path if necessary
  
      await sequelize.authenticate();
      console.log('Connection has been established successfully.');
    } catch (err) {
      console.error('Unable to connect to the database:', err);
    }
  }
  
  testConnection();