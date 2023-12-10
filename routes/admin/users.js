// Hanldes Routes for amind related user functions

const express = require('express');
const adminUserController = require('../../controllers/adminUserController');
const router = express.Router();

router.get('/', adminUserController.getAllUsers);
router.get('/:id', adminUserController.getUserDetails);

module.exports = router;
