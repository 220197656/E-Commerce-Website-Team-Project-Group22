const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 

class Basket extends Model {}

Basket.init({
    BasketID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    ClientID: DataTypes.INTEGER,
    ProductID: DataTypes.INTEGER,
    Quantity: DataTypes.INTEGER
}, {
    sequelize,
    modelName: 'Basket',
    timestamps: false,
    // Foreign keys?
});

module.exports = Basket;
