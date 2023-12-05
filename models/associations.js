// associations.js
const Client = require('./Client');
const Admin = require('./Admin');
const Product = require('./Product');
const NewProduct = require('./NewProduct');
const OldProduct = require('./OldProduct');
const Basket = require('./Basket');
const Order = require('./Order');
const OrderItem = require('./OrderItem');
const Review = require('./Review');
const Shipment = require('./Shipment');
const InventoryAlert = require('./InventoryAlert');
const Category = require('./Category');
const ProductCategory = require('./ProductCategory');

// Relationships

// Clients and Orders (One-to-Many)
Client.hasMany(Order, { foreignKey: 'ClientID' });
Order.belongsTo(Client, { foreignKey: 'ClientID' });

// Products and Categories (Many-to-Many)
Product.belongsToMany(Category, { through: ProductCategory });
Category.belongsToMany(Product, { through: ProductCategory });

// NewProduct and Product (One-to-One)
Product.hasOne(NewProduct, { foreignKey: 'ProductID' });
NewProduct.belongsTo(Product, { foreignKey: 'ProductID' });

// OldProduct and Product (One-to-One)
Product.hasOne(OldProduct, { foreignKey: 'ProductID' });
OldProduct.belongsTo(Product, { foreignKey: 'ProductID' });

// Orders and OrderItems (One-to-Many)
Order.hasMany(OrderItem, { foreignKey: 'OrderID' });
OrderItem.belongsTo(Order, { foreignKey: 'OrderID' });

//Potentially other relationships 

module.exports = {
  // Optionally export something if needed
};
