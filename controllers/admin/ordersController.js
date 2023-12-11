const Order = require('../../models/Order'); 

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

    createOrder: async (req, res) => {
        try {
            const newOrder = await Order.create(req.body);
            res.status(201).json(newOrder);
        } catch (error) {
            res.status(500).send('Error creating order: ' + error.message);
        }
    },

    updateOrder: async (req, res) => {
        try {
            const updatedOrder = await Order.update(req.body, {
                where: { id: req.params.id }
            });

            if (updatedOrder[0]) {
                res.send('Order updated successfully');
            } else {
                res.status(404).send('Order not found');
            }
        } catch (error) {
            res.status(500).send('Error updating order: ' + error.message);
        }
    },

    deleteOrder: async (req, res) => {
        try {
            const result = await Order.destroy({
                where: { id: req.params.id }
            });

            if (result) {
                res.send('Order deleted successfully');
            } else {
                res.status(404).send('Order not found');
            }
        } catch (error) {
            res.status(500).send('Error deleting order: ' + error.message);
        }
    }
};

module.exports = adminOrderController;

