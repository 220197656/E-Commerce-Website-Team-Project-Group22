// models/ProductCategory.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database');

class ProductCategory extends Model {}

ProductCategory.init({
  ProductID: { type: DataTypes.INTEGER, primaryKey: true },
  CategoryID: { type: DataTypes.INTEGER, primaryKey: true }
}, {
  sequelize,
  modelName: 'ProductCategory',
  timestamps: false
});

module.exports = ProductCategory;
