
/*
addInventoryItem: You can add new things to the inventory using this method. It differs from addProduct in productsController 
in that it may alter an existing product's inventory status rather than adding a new product to the database.

removeInventoryItem: This function eliminates an item from the inventory without actually erasing the product 
from the database. Usually, this is done by setting the item's stock level to 0 (or another suitable level).
Unlike deleteProduct in productsController, which would completely destroy the product record, this is not the same.
*/

const Product = require('../../models/Product');

const inventoryController = {
    getAllInventory: async (req, res) => {
        try {
            const products = await Product.findAll({
                attributes: ['ProductID', 'ProductName', 'Stock'] // Select only inventory-relevant fields
            });
            res.json(products);
        } catch (error) {
            res.status(500).send('Error retrieving inventory: ' + error.message);
        }
    },

    updateInventory: async (req, res) => {
        try {
            const { stock } = req.body; // Assume we're only updating the stock level
            const updatedInventory = await Product.update({ Stock: stock }, {
                where: { ProductID: req.params.id }
            });
            if (updatedInventory[0] > 0) {
                res.send('Inventory updated successfully.');
            } else {
                res.status(404).send('Product not found for inventory update.');
            }
        } catch (error) {
            res.status(500).send('Error updating inventory: ' + error.message);
        }
    },

      // Add a new inventory item (distinct from adding a new product)
      addInventoryItem: async (req, res) => {
        try {
            // Extracting relevant inventory information
            const { productName, stock } = req.body;
            // Assuming a product already exists and we're just adding it to inventory
            const newInventoryItem = await Product.create({
                ProductName: productName,
                Stock: stock,
                // Add other necessary fields if required
            });
            res.status(201).json(newInventoryItem);
        } catch (error) {
            res.status(500).send('Error adding inventory item: ' + error.message);
        }
    },

    // Remove an item from inventory (without deleting the product)
    removeInventoryItem: async (req, res) => {
        try {
            // Assuming we're setting the stock level to 0 or a specified value
            const { newStockLevel } = req.body; // For instance, set to 0
            const result = await Product.update({ Stock: newStockLevel }, {
                where: { ProductID: req.params.id }
            });
            if (result > 0) {
                res.send('Inventory item removed successfully.');
            } else {
                res.status(404).send('Inventory item not found.');
            }
        } catch (error) {
            res.status(500).send('Error removing inventory item: ' + error.message);
        }
    },

};

module.exports = inventoryController;