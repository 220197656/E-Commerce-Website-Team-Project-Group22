// Handles the Routes for products admin 

const express = require('express');
const adminProductController = require('../../controllers/adminProductController');
const router = express.Router();

router.get('/', adminProductController.getAllProducts);
router.post('/', adminProductController.addProduct);
router.put('/:id', adminProductController.updateProduct);
router.delete('/:id', adminProductController.deleteProduct);

module.exports = router;
