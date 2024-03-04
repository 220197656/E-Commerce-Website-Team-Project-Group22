// // admin.js

// document.addEventListener('DOMContentLoaded', function() {
//     // Add event listeners for each section in the admin panel

//     // For Orders
//     document.querySelector('.order-link').addEventListener('click', () => {
//         fetchOrders();
//     });

//     // For Users
//     document.querySelector('.user-link').addEventListener('click', () => {
//         fetchUsers();
//     });

//     //For staff
//     document.querySelectorAll('.nav-menu .dropdown-content a[href="#staff"]').forEach(link => {
//         link.addEventListener('click', async () => {
//             const response = await fetch('/api/admin/staff');
//             const staff = await response.json();
//             // Display staff details
//         });
//     });
    
//     //For Products
//     document.querySelectorAll('.nav-menu .dropdown-content a[href="#products"]').forEach(link => {
//         link.addEventListener('click', async () => {
//             const response = await fetch('/api/admin/products');
//             const products = await response.json();
//             // Display products
//         });
//     });
    
//     //For Invetory
//     document.querySelectorAll('.nav-menu .dropdown-content a[href="#inventory"]').forEach(link => {
//         link.addEventListener('click', async () => {
//             const response = await fetch('/api/admin/inventory');
//             const inventory = await response.json();
//             // Display inventory details
//         });
//     });
    
//     //For Promotions
//     /*
//     Not yet implemented
//     */


// });

// //Fetch orders
// function fetchOrders() {
//     fetch('/api/admin/orders')
//     .then(response => response.json())
//     .then(data => {
//         console.log('Orders:', data);
//         // Process and display orders data
//     })
//     .catch(error => console.error('Error fetching orders:', error));
// }

// //Fetch users
// function fetchUsers() {
//     fetch('/api/admin/users')
//     .then(response => response.json())
//     .then(data => {
//         console.log('Users:', data);
//         // Process and display users data
//     })
//     .catch(error => console.error('Error fetching users:', error));
// }

// // Fetch Staff
// function fetchStaff() {
//     fetch('/api/admin/staff')
//     .then(response => response.json())
//     .then(data => {
//         console.log('Staff:', data);
//         // Process and display staff data
//     })
//     .catch(error => console.error('Error fetching staff:', error));
// }

// // Fetch Products
// function fetchProducts() {
//     fetch('/api/admin/products')
//     .then(response => response.json())
//     .then(data => {
//         console.log('Products:', data);
//         // Process and display products data
//     })
//     .catch(error => console.error('Error fetching products:', error));
// }

// // Fetch Inventory
// function fetchInventory() {
//     fetch('/api/admin/inventory')
//     .then(response => response.json())
//     .then(data => {
//         console.log('Inventory:', data);
//         // Process and display inventory data
//     })
//     .catch(error => console.error('Error fetching inventory:', error));
// }






// /*
// Search Functionality:

// Implement search functionality for the admin dashboard.
// javascript
// Copy code
// document.querySelector('.search input[type="search"]').addEventListener('input', async (e) => {
//     const searchTerm = e.target.value;
//     // Perform search using an API endpoint, if available
// });
// Log Out:

// Implement the logout functionality.
// javascript
// Copy code
// document.querySelector('.nav-menu a[href="#logout"]').addEventListener('click', async () => {
//     await fetch('/api/admin/logout', { method: 'POST' });
//     // Redirect to the login page or show a logout confirmation
// });
// Dynamic Username Display:

// Fetch and display the admin's username.
// javascript
// Copy code
// window.addEventListener('DOMContentLoaded', async () => {
//     const response = await fetch('/api/admin/profile');
//     const adminProfile = await response.json();
//     document.querySelector('.user h4').textContent = adminProfile.username;
// });

// */