// models/InventoryAlert.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database');


class InventoryAlert extends Model {}

InventoryAlert.init({
  AlertID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  ProductID: DataTypes.INTEGER,
  AlertType: DataTypes.STRING,
  AlertDate: DataTypes.DATE
}, {
  sequelize,
  modelName: 'InventoryAlert',
  timestamps: false
});

module.exports = InventoryAlert;
