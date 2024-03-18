<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Product Catalog</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .variant-row {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Product Catalog</h1>

    <input type="text" id="live_search" name="live_search" placeholder="Search products...">
    <div id="search_results"></div>

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



    <table border= '1'>
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
