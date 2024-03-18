@foreach ($products as $product)
    <tr>
        <td>{{ $product->productName }}</td>
        <td>{{ $product->productID }}</td>
        <td>Main Product</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
    </tr>
    @foreach ($product->variants as $variant)
        <tr class="variant-row">
            <td> -- </td>
            <td> -- </td>
            <td>{{ $variant->grade->gradeName }}</td>
            <td>${{ number_format($variant->price, 2) }}</td>
            <td>{{ $variant->quantity }}</td>
            <td>{{ $variant->variantID }}</td>
        </tr>
    @endforeach
@endforeach
