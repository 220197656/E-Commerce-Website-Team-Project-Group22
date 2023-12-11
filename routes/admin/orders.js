//handles Routes for admin related fuctionality

const express = require('express');
const adminOrderController = require('../../controllers/admin/OrderController');
const router = express.Router();

router.get('/', adminOrderController.getAllOrders);
router.get('/:id', adminOrderController.getOrderDetails);
router.post('/:id/update', adminOrderController.updateOrder);

module.exports = router;
