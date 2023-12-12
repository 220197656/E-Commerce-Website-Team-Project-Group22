// models/Order.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../database');

class Order extends Model {}

Order.init({
  OrderID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  ClientID: DataTypes.INTEGER,
  OrderDate: DataTypes.DATE,
  ShippingAddress: DataTypes.TEXT,
  TotalAmount: DataTypes.DECIMAL(10, 2)
}, {
  sequelize,
  modelName: 'Order',
  timestamps: false
});

module.exports = Order;
