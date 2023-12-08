//handle admin functionalities related to users

const User = require('../models/user'); 

const adminUserController = {
    getAllUsers: async (req, res) => {
        try {
            const users = await User.findAll();
            res.json(users);
        } catch (error) {
            res.status(500).send('Error retrieving users: ' + error.message);
        }
    },

    getUserDetails: async (req, res) => {
        try {
            const user = await User.findByPk(req.params.id);
            res.json(user);
        } catch (error) {
            res.status(500).send('Error retrieving user details: ' + error.message);
        }
    },

    // Additional functionalities as needed...
};

module.exports = adminUserController;
