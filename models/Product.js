// models/Product.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database');

class Product extends Model {}

Product.init({
  ProductID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  ProductName: DataTypes.STRING,
  Category: DataTypes.STRING,
  Price: DataTypes.DECIMAL(10, 2),
  Status: DataTypes.ENUM('new', 'old'),
  Description: DataTypes.TEXT,
  Stock: DataTypes.INTEGER,
  ImageURL: DataTypes.TEXT
}, {
  sequelize,
  modelName: 'Product',
  timestamps: false
});

module.exports = Product;
