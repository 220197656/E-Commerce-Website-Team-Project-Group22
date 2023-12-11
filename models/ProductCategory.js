const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 

class ProductCategory extends Model {}

ProductCategory.init({
    CategoryID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    CategoryName: DataTypes.STRING,
    ParentCategoryID: DataTypes.INTEGER
}, {
    sequelize,
    modelName: 'ProductCategory',
    timestamps: false
});

module.exports = ProductCategory;
