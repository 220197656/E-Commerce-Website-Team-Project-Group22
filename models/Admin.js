const { Model, DataTypes } = require('sequelize');
const sequelize = require('../js/database'); 
class Admin extends Model {}

Admin.init({
    AdminID: { type: DataTypes.INTEGER, primaryKey: true, autoIncrement: true },
    Username: { type: DataTypes.STRING, unique: true },
    Password: DataTypes.STRING,
    Email: { type: DataTypes.STRING, unique: true },
    PhoneNumber: DataTypes.STRING,
    LevelOfAdmin: DataTypes.INTEGER
}, {
    sequelize,
    modelName: 'Admin',
    timestamps: false
});

module.exports = Admin;
