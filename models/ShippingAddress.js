const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 

class ShippingAddress extends Model {}

ShippingAddress.init({
    AddressID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    ClientID: DataTypes.INTEGER,
    FirstName: DataTypes.STRING,
    LastName: DataTypes.STRING,
    Company: DataTypes.STRING,
    AddressLine1: DataTypes.STRING,
    AddressLine2: DataTypes.STRING,
    Country: DataTypes.STRING,
    County: DataTypes.STRING,
    City: DataTypes.STRING,
    PostCode: DataTypes.STRING,
    PhoneNumber: DataTypes.STRING
}, {
    sequelize,
    modelName: 'ShippingAddress',
    timestamps: false
});

module.exports = ShippingAddress;
