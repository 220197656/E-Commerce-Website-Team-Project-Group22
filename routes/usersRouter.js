// handles user-related routes (like user registration/login, profile view/update, etc.)


router.post('/login', userController.login);
router.post('/register', userController.register);

