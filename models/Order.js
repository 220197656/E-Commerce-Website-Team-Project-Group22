const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 

class Order extends Model {}

Order.init({
    OrderID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    ClientID: DataTypes.INTEGER,
    OrderDate: DataTypes.DATE,
    TotalAmount: DataTypes.DECIMAL(10, 2),
    ShippingAddressID: DataTypes.INTEGER
}, {
    sequelize,
    modelName: 'Order',
    timestamps: false
});

module.exports = Order;
