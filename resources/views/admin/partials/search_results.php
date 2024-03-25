<!-- This file is used to render search results -->

<!-- @foreach ($products as $product)
    <tr>
        <td>{{ $product->productName }}</td>
        <td>{{ $product->productID }}</td>
        <td>Main Product</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>
            <button class="btnRemove" data-product-id="{{ $product->productID }}" onclick="togglePopup(this)">Remove</button>
            <button class="btnChange" data-product-id="{{ $product->productID }}" onclick="togglePopupTwo(this)">Change</button>
        </td>
    </tr>
    @foreach ($product->variants as $variant)
        <tr class="variant-row">
            <td> -- </td>
            <td> -- </td>
            <td>{{ $variant->grade->gradeName }}</td>
            <td>${{ number_format($variant->price, 2) }}</td>
            <td>{{ $variant->quantity }}</td>
            <td>{{ $variant->variantID }}</td>
            <td>
                <button class="btnRemoveVariant" data-variant-id="{{ $variant->variantID }}" onclick="togglePopupVariantRemove(this)">Remove</button>
                <button class="btnChangeVariant" data-variant-id="{{ $variant->variantID }}" onclick="togglePopupVariantChange(this)">Change</button>
            </td>
        </tr>
    @endforeach
@endforeach -->



@foreach ($products as $product)
    <tr>
        <td>{{ $product->productName }}</td>
        <td>{{ $product->productID }}</td>
        <td>Main Product</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td><button class="btnRemove"onclick="togglePopup(this)" dataproductid="{{ $product->productID }}">Remove</button></td>

    </tr>
    @foreach ($product->variants as $variant)
        <tr class="variant-row">
            <td> -- </td>
            <td> -- </td>
            <td>{{ $variant->grade->gradeName }}</td>
            <td>${{ number_format($variant->price, 2) }}</td>
            <td>{{ $variant->quantity }}</td>
            <td>{{ $variant->variantID }}</td>
            <td>--</td>
            <td><button class="btnChange" data-variant-id="{{ $variant->variantID }}" onclick="togglePopupTwo(this)">Change</button></td> 
        </tr>
    @endforeach
@endforeach