// models/OldProduct.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database');

class OldProduct extends Model {}

OldProduct.init({
  ProductID: { type: DataTypes.INTEGER, primaryKey: true },
  ConditionGrade: DataTypes.STRING,
  PreviousOwner: DataTypes.TEXT
}, {
  sequelize,
  modelName: 'OldProduct',
  timestamps: false
});

module.exports = OldProduct;
