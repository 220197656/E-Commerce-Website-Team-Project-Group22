const User = require('../../models/Clients'); 

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

    createUser: async (req, res) => {
        try {
            // Extract user details from request body
            const { username, password, email, ...otherDetails } = req.body;

            // Create new user
            const newUser = await User.create({ username, password, email, ...otherDetails });
            res.status(201).json(newUser);
        } catch (error) {
            res.status(500).send('Error creating user: ' + error.message);
        }
    },

    updateUser: async (req, res) => {
        try {
            const user = await User.findByPk(req.params.id);

            if (!user) {
                return res.status(404).send('User not found');
            }

            // Update user details
            const updatedUser = await user.update(req.body);
            res.json(updatedUser);
        } catch (error) {
            res.status(500).send('Error updating user: ' + error.message);
        }
    },

    deleteUser: async (req, res) => {
        try {
            const user = await User.findByPk(req.params.id);

            if (!user) {
                return res.status(404).send('User not found');
            }

            // Delete user
            await user.destroy();
            res.send('User successfully deleted');
        } catch (error) {
            res.status(500).send('Error deleting user: ' + error.message);
        }
    }
};

module.exports = adminUserController;
