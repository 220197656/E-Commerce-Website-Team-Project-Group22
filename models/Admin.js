// models/Admin.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database');

class Admin extends Model {}

Admin.init({
  AdminID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  Username: { type: DataTypes.STRING, unique: true },
  Password: DataTypes.STRING,
  Salt: DataTypes.STRING,
  Email: { type: DataTypes.STRING, unique: true },
  PhoneNumber: DataTypes.STRING,
  LevelOfAdmin: DataTypes.INTEGER
}, {
  sequelize,
  modelName: 'Admin',
  timestamps: false
});

module.exports = Admin;
