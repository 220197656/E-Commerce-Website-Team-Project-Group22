const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 

class BillingAddress extends Model {}

BillingAddress.init({
    AddressID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    ClientID: DataTypes.INTEGER,
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
    modelName: 'BillingAddress',
    timestamps: false
});

module.exports = BillingAddress;
