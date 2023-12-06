const express = require('express');
const router = express.Router();
const { Op } = require('sequelize');
const Product = require('../models/Product'); // Update the path as needed

// Search products route
router.get('/search', async (req, res) => {
    const searchTerm = req.query.term;
    try {
        const products = await Product.findAll({
            where: {
                [Op.or]: [
                    {
                        ProductName: {
                            [Op.like]: `%${searchTerm}%` // Fuzzy search for product name
                        }
                    },
                    {
                        Category: {
                            [Op.like]: `%${searchTerm}%` // Fuzzy search for category
                        }
                    }
                ]
            }
        });
        res.json(products);
    } catch (error) {
        res.status(500).send('Error searching for products: ' + error.message);
    }
});

module.exports = router;
