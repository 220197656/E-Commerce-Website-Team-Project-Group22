// models/Category.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database');

class Category extends Model {}

Category.init({
  CategoryID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  CategoryName: DataTypes.STRING,
  ParentCategoryID: DataTypes.INTEGER // Nullable if some categories don't have a parent
}, {
  sequelize,
  modelName: 'Category',
  timestamps: false
});

module.exports = Category;
