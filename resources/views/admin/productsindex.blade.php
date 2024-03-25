<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Product Catalogue</title>
    <link rel="stylesheet" href="/css/adminproducts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Product Catalogue</h1>
    <div class="searchAndBack">

    <a href="{{ route('admin.home') }}" class = "backbtn"><i class="fa-regular fa-arrow-left"></i></a>
    <input type="text" id="live_search" name="live_search" placeholder="Search Products...">
    <button class="btnAdd"onclick="togglePopupThree(this)">Add</button>

    </div>
    

<script>

    $(document).ready(function() {
        $('#live_search').keyup(function() {
            let query = $(this).val();

            $.ajax({
                url: "{{ route('Admin.products.liveSearch') }}",
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


    var dataproductid;
    function togglePopup(button)
    {
        

            const popup = document.getElementById("popup-1");
            popup.classList.toggle("active");

            const popupContent = popup.querySelector(".content");

            if (popup.classList.contains("active")) {
                popupContent.style.position = "fixed";
                popupContent.style.top = "50%";
                popupContent.style.left = "50%";
                popupContent.style.transform = "translate(-50%, -50%)";
                dataproductid = button.getAttribute('dataproductid');
            } else {
                popupContent.style.position = "";
                popupContent.style.top = "";
                popupContent.style.left = "";
                popupContent.style.transform = "";
            }
    } 

    $(document).ready(function() {
        $(".btnPopupYes").click(function() {
            // var productId = $(this).data("dataproductid");
            removeFunction(dataproductid);
        });
    });


    function removeFunction(productId) {
        if (productId) {
            $.ajax({
                url: "/admin/products/" + productId,
                type: 'DELETE',
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 20); 
                    window.alert("Product Removed Successfully");
                },      
            });
        } 
    }

    function togglePopupTwo(button) {
        var variantId = button.getAttribute('data-variant-id');
        document.getElementById("variantIDInput").value = variantId; // Set the variant ID in the hidden input

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

    function closePopup() {
        const popup = document.getElementById("popup-2");
        if (popup.classList.contains("active")) {
            popup.classList.remove("active");
            const popupContent = popup.querySelector(".content");
            popupContent.style.position = "";
            popupContent.style.top = "";
            popupContent.style.left = "";
            popupContent.style.transform = "";
        }
    }

    function closePopup3() {
        const popup = document.getElementById("popup-3");
        if (popup.classList.contains("active")) {
            popup.classList.remove("active");
            const popupContent = popup.querySelector(".content");
            popupContent.style.position = "";
            popupContent.style.top = "";
            popupContent.style.left = "";
            popupContent.style.transform = "";
        }
    }



    function togglePopupThree() {
        const popup = document.getElementById("popup-3");
        if (!popup) {
            console.error("Popup-3 not found");
            return;
        }
        popup.classList.toggle("active");

        const popupContent = popup.querySelector(".content");
        if (!popupContent) {
            console.error("Popup content not found");
            return;
        }
    }
    

    document.addEventListener('DOMContentLoaded', function() {
    const addVariantBtn = document.getElementById('addVariantBtn');
    const removeVariantBtn = document.getElementById('removeVariantBtn');
    const variantsContainer = document.getElementById('variantsContainer');

    const gradeNameToIdMapping = {
    'Brand New': 1, // Example IDs
    'Excellent': 2,
    'Good': 3,
    'Fair': 4,
};

    function addVariantFields() {
        const grades = ['Brand New', 'Excellent', 'Good', 'Fair']; // Predefined grades

        grades.forEach((grade, index) => {
            const gradeID = gradeNameToIdMapping[grade]; // Get the ID based on the grade name
            var variantDiv = document.createElement('div');
            variantDiv.classList.add('variant');
            variantDiv.innerHTML = `
                <div class="formContent">
                    <input type="hidden" name="variants[${index}][gradeID]" value="${gradeID}" readonly>
                    <input class="changeForm2" disabled id="read" type="text" name="variants[${index}][grade]" value="${grade}" readonly>
                    <input class="changeForm2" type="number" name="variants[${index}][quantity]" placeholder="Quantity" required>
                    <input class="changeForm2" type="text" name="variants[${index}][price]" placeholder="Price" required>
                </div>
            `;
            variantsContainer.appendChild(variantDiv);
        });

        // Toggle button visibility
        addVariantBtn.style.display = 'none';
        removeVariantBtn.style.display = '';
    }

    function removeVariantFields() {
        // Remove all variant fields
        while (variantsContainer.firstChild) {
            variantsContainer.removeChild(variantsContainer.firstChild);
        }

        // Toggle button visibility
        addVariantBtn.style.display = '';
        removeVariantBtn.style.display = 'none';
    }

    // Attach event listeners to buttons
    addVariantBtn.addEventListener('click', addVariantFields);
    removeVariantBtn.addEventListener('click', removeVariantFields);
});





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
    <tr id="product-row-{{ $product->productID }}">
            <td>{{ $product->productName }}</td>
            <td>{{ $product->productID }}</td>
            <td>Main Product</td>
            <td>--</td> <!-- Placeholder for Main Product Price -->
            <td>--</td> <!-- Placeholder for Main Product Stock -->
            <td>--</td> <!-- Placeholder for Main Product variantID -->
            <td><button class="btnRemove"onclick="togglePopup(this)" dataproductid="{{ $product->productID }}">Remove</button></td>
            <!-- data-product-id="{{ $product->productID }}" -->
        </tr>
        @foreach ($product->variants as $variant)
            <tr class="variant-row">
                <td> -- </td> <!-- Placeholder for indentation -->
                <td> -- </td> <!-- Placeholder for Product ID when showing variants -->
                <td>{{ $variant->grade->gradeName }}</td>
                <td>${{ number_format($variant->price, 2) }}</td>
                <td>{{ $variant->quantity }}</td>
                <td>{{ $variant->variantID }}</td>
                <td>--</td>
                <td><button class="btnChange" data-variant-id="{{ $variant->variantID }}" onclick="togglePopupTwo(this)">Change</button></td>

                <!-- <td><button class="btnRemove" onclick="togglePopup(this)">Remove</button></td> -->
                <!-- <td><button class="btnChange" onclick="togglePopupTwo(this)">Change</button></td> -->

            </tr>
        @endforeach
    @endforeach
</tbody>
    </table>
    <div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div class="content">
    <p>Do You Want to Remove this Product?</p>
            <button class="btnPopupYes"onclick = "removeFunction()">Yes</button>
            <button class="btnPopupNo"onclick="togglePopup()">No</button>

    </div>
</div>

<div class="popup2" id="popup-2">
    <div class="overlay"></div>
    <div class="content">
        <p>Change</p>
            <form method="POST" action="{{ route('admin.variant.update') }}">
                @csrf
                <input type="hidden" name="variantID" id="variantIDInput" value="">
                <input class="changeForm" type="number" name="quantity" placeholder="New Stock" required>
                <input class="changeForm" type="text" name="price" placeholder="New Price" required>
                <button type="submit" class="btnPopupYes">Save</button>
                <button type="button" class="btnPopupNo" onclick="closePopup()">Cancel</button>
            </form>
    </div>
</div>


    </div>
    <!-- <div>
     <div class="popup3" id= "popup-3">      
        <div class="overlay"></div>
        <div class="content">
            <p>Add Product</p>
            <form method="POST" action="~">
                <input class="changeFormProduct" type="text" name="ProductName" placeholder="Product Name" required>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Product Description"></textarea>
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
             </form>
             <div class="formContentButton">
                <button class="btnPopupYes">Save</button>
                <button class="btnPopupNo" onclick="togglePopupThree()">Cancel</button>
             </div>
         </div> -->

         <div>
        <div class="popup3" id="popup-3" >
            <div class="overlay"></div>
            <div class="content">
            <div class="wrapper" id="formContainer">
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
            @csrf
                <p>Add New Product</p>
                    <input type="text" id="productName" placeholder="Product Name" name="productName" required>

                        <select id="categoryID" name="categoryID" required>
                            <option value="">Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->categoryID }}">{{ $category->categoryName }}</option>
                            @endforeach
                        </select>

                    <textarea id="description" name="description" placeholder="Description" required></textarea>

                    <input type="file" id="imageURL" name="imageURL"required>

                <p id = "variantp">Variants</p>
                <div class ="variantcontainer"id="variantsContainer">
                    <!-- Variant fields will be added here dynamically -->
                </div>
                <button type="button" class="btnPopupVar" id="addVariantBtn">Add Variant</button>
                <button type="button" class="btnPopupVar" id="removeVariantBtn" style="display: none;"> Remove Variants</button>
                <div class="functionButtons">
                <button type="submit"class="btnPopupYes">Submit</button>
                <button type="button" class="btnPopupNo" onclick="closePopup3()">Cancel</button>
                </div>
                

    </form>
    </div>
    </div>
    </div>

</body>
</html>


