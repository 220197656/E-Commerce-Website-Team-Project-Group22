//handle admin functionalities related to products
const Product = require('../models/Product'); 

const adminProductController = {
    getAllProducts: async (req, res) => {
        try {
            const products = await Product.findAll();
            res.json(products);
        } catch (error) {
            res.status(500).send('Error retrieving products: ' + error.message);
        }
    },

    addProduct: async (req, res) => {
        try {
            const { productName, category, price, status, description, stock, imageURL } = req.body;
            const newProduct = await Product.create({
                ProductName: productName,
                Category: category,
                Price: price,
                Status: status,
                Description: description,
                Stock: stock,
                ImageURL: imageURL
            });
            res.status(201).json(newProduct);
        } catch (error) {
            res.status(500).send('Error adding product: ' + error.message);
        }
    },

    updateProduct: async (req, res) => {
        try {
            const { productName, category, price, status, description, stock, imageURL } = req.body;
            const updatedProduct = await Product.update({
                ProductName: productName,
                Category: category,
                Price: price,
                Status: status,
                Description: description,
                Stock: stock,
                ImageURL: imageURL
            }, {
                where: { ProductID: req.params.id }
            });
            if (updatedProduct[0] > 0) {
                res.send('Product updated successfully.');
            } else {
                res.status(404).send('Product not found.');
            }
        } catch (error) {
            res.status(500).send('Error updating product: ' + error.message);
        }
    },

    deleteProduct: async (req, res) => {
        try {
            const result = await Product.destroy({
                where: { ProductID: req.params.id }
            });
            if (result > 0) {
                res.send('Product deleted successfully.');
            } else {
                res.status(404).send('Product not found.');
            }
        } catch (error) {
            res.status(500).send('Error deleting product: ' + error.message);
        }
    },



};

module.exports = adminProductController;
