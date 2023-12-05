// models/Basket.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database'); // Adjust the path as needed

class Basket extends Model {}

Basket.init({
  BasketID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  ClientID: DataTypes.INTEGER,
  ProductID: DataTypes.INTEGER,
  Quantity: DataTypes.INTEGER
}, {
  sequelize,
  modelName: 'Basket',
  timestamps: false
});

module.exports = Basket;
