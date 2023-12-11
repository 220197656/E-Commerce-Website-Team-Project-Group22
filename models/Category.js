const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 
class Category extends Model {}

Category.init({
    CategoryID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    CategoryName: DataTypes.STRING,
    ParentCategoryID: DataTypes.INTEGER
}, {
    sequelize,
    modelName: 'Category',
    timestamps: false
});

module.exports = Category;
