const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 

class OrderItem extends Model {}

OrderItem.init({
    OrderItemID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    OrderID: DataTypes.INTEGER,
    ProductID: DataTypes.INTEGER,
    Quantity: DataTypes.INTEGER,
    Price: DataTypes.DECIMAL(10, 2)
}, {
    sequelize,
    modelName: 'OrderItem',
    timestamps: false
});

module.exports = OrderItem;
