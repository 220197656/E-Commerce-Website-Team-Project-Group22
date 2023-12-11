const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); // Adjust path as necessary

class Client extends Model {}

Client.init({
    ClientID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    Username: { type: DataTypes.STRING, unique: true },
    Password: DataTypes.STRING,
    Email: { type: DataTypes.STRING, unique: true },
    PhoneNumber: DataTypes.STRING,
    FirstName: DataTypes.STRING,
    LastName: DataTypes.STRING
}, {
    sequelize,
    modelName: 'Client',
    timestamps: false
});

module.exports = Client;