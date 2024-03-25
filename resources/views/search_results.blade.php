<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="/path/to/your/css/style.css">
</head>
<body>
<div class="content-wrapper">
    <div class="results-wrapper">
        <h2>Search Results</h2>
        <div class="results">
            @forelse($products as $product)
                <div class="product-item">
                    <img src="{{ $product->imageURL }}" alt="Image of {{ $product->productName }}">
                    <div class="title">{{ $product->productName }}</div>
                    <div class="description">{{ $product->description }}</div>
                    <!-- Additional details like price can be added here -->
                </div>
            @empty
                <p>No products found.</p>
            @endforelse
        </div>
    </div>
</div>
<!-- Include your JavaScript files here -->
<script src="/path/to/your/js/script.js"></script>
</body>
</html>
