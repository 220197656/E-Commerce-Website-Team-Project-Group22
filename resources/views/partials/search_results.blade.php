<!-- @foreach($products as $product)
    <div class="product-item">
        <img src="{{ $product->imageURL }}" alt="{{ $product->productName }}">
        <div class="title">{{ $product->productName }}</div>
        <div class="description">{{ $product->description }}</div>
    </div>
@endforeach -->

<div class="results" id="search-results">

            @foreach($products as $product)
                <a href="{{ route('product.show', ['id' => $product->productID]) }}" class="product-item">
                    <img src="{{ $product->imageURL }}" alt="Image of {{ $product->productName }}" style="max-width:100%; height:auto;">
                    <div class="title">{{ $product->productName }}</div>
                    <div class="subtitle">{{ $product->description }}</div>
                    
                    
                    <p>Brand New Price</p>
                    <h3 class="hover-animation">£{{ number_format($product->brandNewPrice, 2) }}</h3>
                    
                    <!-- Placeholder for additional product details -->
                </a>
            @endforeach
 </div>
