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

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product ID</th>
                <th>Variant</th>
                <th>Price</th>
                <th>Stock</th>
                <th>variantID</th>
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
        </tr>
        @foreach ($product->variants as $variant)
            <tr class="variant-row">
                <td> -- </td> <!-- Placeholder for indentation -->
                <td> -- </td> <!-- Placeholder for Product ID when showing variants -->
                <td>{{ $variant->grade->gradeName }}</td>
                <td>${{ number_format($variant->price, 2) }}</td>
                <td>{{ $variant->quantity }}</td>
                <td>{{ $variant->variantID }}</td>
            </tr>
        @endforeach
    @endforeach
</tbody>
    </table>
</body>
</html>