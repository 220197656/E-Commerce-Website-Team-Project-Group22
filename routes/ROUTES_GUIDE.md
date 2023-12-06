
# ROUTES GUIDE

# Overview
This guide provides an overview of the routing structure used in this application. Routes in an Express.js application are essentially the various endpoints that the server exposes for handling HTTP requests. They define how an application responds to client requests to a particular endpoint, which is a URI (or path) and a specific HTTP request method (GET, POST, PUT, DELETE, etc.).

Each route can have one or more handler functions, which are executed when the route is matched. This application organizes routes into separate modules within the routes folder for better maintainability and clarity.

# Route Files
1. adminRouter.js
Purpose: Manages all administrative actions and functionalities.
Typical Endpoints:
GET /api/admin/users: Retrieves a list of all users.
POST /api/admin/product: Adds a new product.
2. usersRouter.js
Purpose: Handles user-related operations such as account creation, authentication, and user profile management.
Typical Endpoints:
POST /api/users/register: Registers a new user.
POST /api/users/login: Authenticates a user.
3. ordersRouter.js
Purpose: Deals with order processing, including order creation, modification, and tracking.
Typical Endpoints:
POST /api/orders: Places a new order.
GET /api/orders/:id: Retrieves a specific order's details.
4. productsRouter.js
Purpose: Handles all product-related requests like fetching product details, searching for products, etc.
Typical Endpoints:
GET /api/products: Lists all products.
GET /api/products/search: Searches products based on criteria.