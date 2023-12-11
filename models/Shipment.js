// models/Shipment.js
const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database');


class Shipment extends Model {}

Shipment.init({
  ShipmentID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
  OrderID: DataTypes.INTEGER,
  TrackingNumber: DataTypes.STRING,
  ShipmentDate: DataTypes.DATE,
  EstimatedArrival: DataTypes.DATE
}, {
  sequelize,
  modelName: 'Shipment',
  timestamps: false
});

module.exports = Shipment;
