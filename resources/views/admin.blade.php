<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="./js/admin.js"></script>
  </head>
  <body>
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="/source/logo-light.png" alt=""></a>
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="dashboard"><span class="fa-regular fa-chart-mixed"></span>
                    <span> Dashboard</span></a>
                    </li>
                <li><a href="{{ route('admin.orders') }}" class="order-link">
                    <span class="fa-regular fa-bags-shopping"></span>
                    <span> Orders</span></a>
                        <div class="dropdown-content">
                            <a href="#">Shipping Label Generation </a>
                            <a href="#">Packaging slip gen</a>
                            <a href="#">Automated status emails</a>
                        </div></li>
                      <li>
                        <a href="{{ route('admin.users') }}" class="user-link">
                            <span class="fa-regular fa-users"></span>
                            <span>Users</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="#" id="allUsers">All Users</a>
                            <a href="#" id="userOrders">Orders</a>
                            <a href="#" id="userSupportTickets">Send / Access Support Tickets</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('admin.staff') }}" class="staff-link">
                            <span class="fa-regular fa-users"></span>
                            <span>Staff</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="#" id="addRemoveEmployee">Add/Remove Employee</a>
                            <a href="#" id="accessLevels">Access Levels</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('admin.products') }}" class="product-link">
                            <span class="fa-regular fa-layer-group"></span>
                            <span>Products</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="#" id="addRemoveProducts">Add/Remove Products</a>
                        </div>
                    </li>
                
                <li class = "theme"><span class="fa-regular fa-billboard"> <button onclick="myFunction()" >Theme</button></li>
                <li><a href=""><span class="fa-regular fa-right-from-bracket"></span>
                    <form method="POST" class="logout" action="{{ route('logout') }}">
                        @csrf
                          <x-dropdown-link :href="route('logout')"
                          onclick="event.preventDefault();
                                    this.closest('form').submit();">
                          <h3>Log Out</h3>
                      </x-dropdown-link>
                      </form></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <header>
        
            <div class="user">
                <img src="/source/logo-light.png" alt="">
                <div>
                    <h4>{{ Auth::user()->name }}</h4>
                    <p>Admin</p>
                </div>
            </div>
        </header>
        <!--test--> 
        <main>
            <div class="elements">
        <div class="el-wrapper">
            <a href="{{ route('admin.orders') }}"><span class="fa-regular fa-bags-shopping"></span>
                <h2>Orders</h2></a>
        </div>
        <div class="el-wrapper">
            <a href="{{ route('admin.users') }}"><span class="fa-regular fa-users"></span>
                <h2>Users</h2></a>
        </div>
        <div class="el-wrapper">
            <a href="{{ route('admin.staff') }}"><span class="fa-regular fa-users"></span>
                <h2>Staff</h2></a>
        </div>
        <div class="el-wrapper">
            <a href="{{ route('admin.products') }}"><span class="fa-regular fa-layer-group"></span>
                <h2>Products</h2></a>
        </div>
        
       
    </div>

            <div id="#orders" class="orders">orders</div>
        </main>
    </div>
  </body>

  <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
            // Store the theme preference in local storage
            var isDarkMode = element.classList.contains("dark-mode");
            localStorage.setItem("theme", isDarkMode ? "dark" : "light");
        }

        // Remove the class to hide content once the page has loaded
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.remove("hide-content");
        });

        // Apply the stored theme preference on page load
        document.addEventListener("DOMContentLoaded", function() {
            var theme = localStorage.getItem("theme");
            if (theme === "dark") {
                document.body.classList.add("dark-mode");
            }
        });
    </script>
</html>