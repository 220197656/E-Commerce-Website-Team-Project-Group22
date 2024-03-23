@ -1,235 +0,0 @@
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Product Catalogue</title>
    <link rel="stylesheet" href="/css/adminproducts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

</head>
<body>
    <h1>Product Catalogue</h1>
    <div class="searchAndBack">

    <a href="/admin" class = "backbtn"><i class="fa-regular fa-arrow-left"></i></a>
    <input type="text" id="live_search" name="live_search" placeholder="Search Products...">
    <button class="btnChange"onclick="togglePopupThree(this)">Change</button>
    <div id="search_results"></div>

    </div>
    

    <script>
$(document).ready(function() {
    $('#live_search').keyup(function() {
        let query = $(this).val();

        $.ajax({
            url: "{{ route('admin.products.liveSearch') }}",
    method: 'GET',
    data: {query: query},
    success: function(data) {
        $('table tbody').html(data);
    },
    error: function(xhr, status, error) {
        console.error("AJAX Error:", xhr.responseText);
    }
});

    });
});

</script>

<script>
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
    function togglePopupTwo(button){
        const popup = document.getElementById("popup-2");
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
    function togglePopupThree(button){
        const popup = document.getElementById("popup-3");
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

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product ID</th>
                <th>Variant</th>
                <th>Price</th>
                <th>Stock</th>
                <th>variantID</th>
                <th>Remove Product</th>
                <th>Change</th>
            </tr>
            <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->productName }}</td>
            <td>{{ $product->productID }}</td>
            <td>Main Product</td>
            <td>--</td> <!-- Placeholder for Main Product Price -->
            <td>--</td> <!-- Placeholder for Main Product Stock -->
            <td>--</td> <!-- Placeholder for Main Product variantID -->
            <td><button class="btnRemove" onclick="togglePopup(this)">Remove</button></td>
            <td><button class="btnChange"onclick="togglePopupTwo(this)">Change</button></td>
        </tr>
        @foreach ($product->variants as $variant)
            <tr class="variant-row">
                <td> -- </td> <!-- Placeholder for indentation -->
                <td> -- </td> <!-- Placeholder for Product ID when showing variants -->
                <td>{{ $variant->grade->gradeName }}</td>
                <td>${{ number_format($variant->price, 2) }}</td>
                <td>{{ $variant->quantity }}</td>
                <td>{{ $variant->variantID }}</td>
                <!-- <td><button class="btnRemove" onclick="togglePopup(this)">Remove</button></td> -->
                <!-- <td><button class="btnChange" onclick="togglePopupTwo(this)">Change</button></td> -->

            </tr>
        @endforeach
    @endforeach
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
    <div class="popup2" id= "popup-2">
        <div class="overlay"></div>
        <div class="content">
            <p>Change</p>
            <form method="POST" action="~">
                <input class="changeForm" type="number" name="variantID" placeholder="Variant ID" required>
                <input class="changeForm" type="number"  name="quantity" placeholder="New Stock" required>
                <input class="changeForm" type="text"  name="price" placeholder="New Price" required>
             </form>
            <button class="btnPopupYes">Save</button>
            <button class="btnPopupNo" onclick="togglePopupTwo()">Cancel</button>
        </div>
    </div>
    <div class="popup3" id= "popup-3">
        <div class="overlay"></div>
        <div class="content">
            <p>Add Product</p>
            <form method="POST" action="~">
                <input class="changeForm" type="text" name="ProductName" placeholder="Product Name" required>
                <select id="cars" name="cars" size="3">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
                <div class="formContent">
                    <p>Brand New</p>
                    <input class="changeForm2" type="text" name="stock" placeholder="Stock" required>
                    <input class="changeForm2" type="text" name="price" placeholder="Price" required>
                </div>
                <div class="formContent">
                    <p>Excellent</p>
                    <input class="changeForm2" type="text" name="stock" placeholder="Stock" required>
                    <input class="changeForm2" type="text" name="price" placeholder="Price" required>
                </div>
                <div class="formContent">
                    <p>Good</p>
                    <input class="changeForm2" type="text" name="stock" placeholder="Stock" required>
                    <input class="changeForm2" type="text" name="price" placeholder="Price" required>
                </div>
                <div class="formContent">
                    <p>Fair</p>
                    <input class="changeForm2" type="text" name="stock" placeholder="Stock" required>
                    <input class="changeForm2" type="text" name="price" placeholder="Price" required>
                </div>
                
                <!-- <input class="changeForm" type="number"  name="quantity" placeholder="New Stock" required> -->
                <!-- <input class="changeForm" type="text"  name="price" placeholder="New Price" required> -->
             </form>
             <div class="formContent">
             <button class="btnPopupYes">Save</button>
            <button class="btnPopupNo" onclick="togglePopupThree()">Cancel</button>
             </div>
        </div>
    </div>
</body>
</html>