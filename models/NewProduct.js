// models/NewProduct.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database'); // Adjust the path as needed

class NewProduct extends Model {}

NewProduct.init({
  ProductID: { type: DataTypes.INTEGER, primaryKey: true },
  Warranty: DataTypes.TEXT,
  Manufacturer: DataTypes.STRING,
  ProductInformation: DataTypes.TEXT
}, {
  sequelize,
  modelName: 'NewProduct',
  timestamps: false
});

module.exports = NewProduct;
