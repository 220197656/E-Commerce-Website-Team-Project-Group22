// models/Client.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database');


class Client extends Model {}

Client.init({
  ClientID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  Username: { type: DataTypes.STRING, unique: true },
  Password: DataTypes.STRING,
  Email: { type: DataTypes.STRING, unique: true },
  PhoneNumber: DataTypes.STRING,
  FirstName: DataTypes.STRING,
  LastName: DataTypes.STRING,
  Address: DataTypes.TEXT
}, {
  sequelize,
  modelName: 'Client',
  timestamps: false
});

module.exports = Client;
