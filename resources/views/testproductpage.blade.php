<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .product-container { max-width: 800px; margin: auto; padding: 20px; }
        .product-image { max-width: 100%; height: auto; }
        .product-info { margin-top: 20px; }
        .product-variants { margin-top: 20px; }
        .variant-selector { margin-top: 20px; }
        button { margin-right: 10px; padding: 5px 10px; }
    </style>
</head>
<body>
    <div class="product-container">
        <h1 id="product-name">Product Name</h1>
        <img id="product-image" src="https://example.com/product.jpg" alt="Product Image" class="product-image">
        <div class="product-info" id="product-description">
            Product description goes here...
        </div>
        <div class="product-variants" id="product-variants">
            <h2>Price: <span id="variant-price">$999.99</span></h2>
            <h3>Quantity Available: <span id="variant-quantity">20</span></h3>
        </div>
        <div class="variant-selector">
            <button onclick="updateVariant('Brand New')">Brand New</button>
            <button onclick="updateVariant('Excellent')">Excellent</button>
            <button onclick="updateVariant('Good')">Good</button>
            <button onclick="updateVariant('Fair')">Fair</button>
        </div>
    </div>

    <script>
        // Placeholder for product variants data
        const variants = {
            'Brand New': { price: '$999.99', quantity: 20 },
            'Excellent': { price: '$899.99', quantity: 15 },
            'Good': { price: '$799.99', quantity: 10 },
            'Fair': { price: '$699.99', quantity: 5 }
        };

        function updateVariant(grade) {
            // Update the displayed price and quantity based on the selected grade
            document.getElementById('variant-price').innerText = variants[grade].price;
            document.getElementById('variant-quantity').innerText = variants[grade].quantity;
        }

        // Initialize the page with the "Brand New" variant displayed
        updateVariant('Brand New');
    </script>
</body>
</html>
