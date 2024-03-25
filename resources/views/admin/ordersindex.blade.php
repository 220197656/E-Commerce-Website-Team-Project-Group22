<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <link rel="stylesheet" href="/css/ordersadmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

</head>
<body>
    <h1>All Orders</h1>
    <a href="/admin" class = "backbtn"><i class="fa-regular fa-arrow-left"></i></a>
    <table  cellspacing="0">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Client ID</th>
                <th>Client Name</th>
                <th>Total Amount</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                
                <tr>
                
                    <td class="first-el"><a href="/admin">{{ $order->orderID }}</a></td>
                    <td class ="el"><a href="/admin">{{ $order->user->id }}</a> </td>
                    <td class ="el"><a href="/admin">{{ $order->user->name ?? 'N/A' }}</a></td> 
                    <td class ="el"><a href="/admin">${{ number_format($order->totalAmount, 2) }}</a></td>
                    <td class ="el"><a href="/admin">{{ $order->orderDate ? $order->orderDate->format('Y-m-d') : 'Date not set' }}</a></td>
                    <td class ="el"><a href="/admin">{{ $order->status ?? 'Pending' }}</a></td> <!-- Placeholder for status -->
                    <td class= "last-el"><button class="btnRemove" onclick="togglePopup(this)">Remove</button></td>
                </tr>
                
            @empty
                <tr>
                    <td colspan="6">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="popup" id= "popup-1">
        <div class="overlay"></div>
        <div class="content">
            <p>Do You Want to Remove this Product?</p>
            <button class="btnPopupYes">Yes</button>
            <button class="btnPopupNo" onclick="togglePopup()">No</button>
        </div>
    </div>
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
            var isDarkMode = element.classList.contains("dark-mode");
            localStorage.setItem("theme", isDarkMode ? "dark" : "light");
        }

        
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.remove("hide-content");
        });

        document.addEventListener("DOMContentLoaded", function() {
            var theme = localStorage.getItem("theme");
            if (theme === "dark") {
                document.body.classList.add("dark-mode");
            }
        });
        function togglePopup(button){
        const popup = document.getElementById("popup-1");
        popup.classList.toggle("active");

        const popupContent = popup.querySelector(".content");

        if (popup.classList.contains("active")) {
            popupContent.style.position = "fixed";
            popupContent.style.top = "50%";
            popupContent.style.left = "50%";
            popupContent.style.transform = "translate(-50%, -50%)";
        } else {
            popupContent.style.position = "";
            popupContent.style.top = "";
            popupContent.style.left = "";
            popupContent.style.transform = "";
        }
    }
    </script>
</body>
</html>