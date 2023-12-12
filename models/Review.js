// models/Review.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database'); // Adjust the path as needed

class Review extends Model {}

Review.init({
  ReviewID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  ProductID: DataTypes.INTEGER,
  ClientID: DataTypes.INTEGER,
  Rating: DataTypes.INTEGER,
  Comment: DataTypes.TEXT,
  Timestamp: DataTypes.DATE
}, {
  sequelize,
  modelName: 'Review',
  timestamps: false
});

module.exports = Review;
