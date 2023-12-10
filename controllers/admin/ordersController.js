const Order = require('../models/order'); 

const adminOrderController = {
    getAllOrders: async (req, res) => {
        try {
            const orders = await Order.findAll();
            res.json(orders);
        } catch (error) {
            res.status(500).send('Error retrieving orders: ' + error.message);
        }
    },

    getOrderDetails: async (req, res) => {
        try {
            const order = await Order.findByPk(req.params.id);
            res.json(order);
        } catch (error) {
            res.status(500).send('Error retrieving order details: ' + error.message);
        }
    },

    updateOrder: async (req, res) => {
        // Implement logic to update an order
    },

    // Additional functionalities as needed...
};

module.exports = adminOrderController;

