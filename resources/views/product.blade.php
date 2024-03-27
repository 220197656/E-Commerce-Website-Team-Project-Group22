<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SBEX Market</title>
  <!-- This is the general CSS file for all pages default theme -->
  <link rel="stylesheet" href="/css/index.css">
  <!-- This lower line is css for this page only -->
  <link rel="stylesheet" href="/css/home.css">  
  <link rel="stylesheet" href="/css/product.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="/source/favicon.png" type="image/x-icon">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="js/burger.js"></script>



  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
</head>

<!-- //......................................................
//.BBBBBBBBB.......OOOOOO.....DDDDDDDDD...DYYY....YYYY..
//.BBBBBBBBBBB...OOOOOOOOOO...DDDDDDDDDD..DYYY....YYY...
//.BBBBBBBBBBB..OOOOOOOOOOOO..DDDDDDDDDDD..YYYY..YYYY...
//.BBB.....BBB..OOOO....OOOO..DDD....DDDD...YYY..YYY....
//.BBB.....BBB..OOO......OOO..DDD.....DDD...YYYYYYYY....
//.BBBBBBBBBB..BOOO......OOOO.DDD.....DDDD...YYYYYY.....
//.BBBBBBBBBB..BOOO......OOOO.DDD.....DDDD....YYYY......
//.BBBBBBBBBBB.BOOO......OOOO.DDD.....DDDD....YYYY......
//.BBB.....BBBB.OOO......OOO..DDD.....DDD.....YYYY......
//.BBB.....BBBB.OOOO....OOOO..DDD....DDDD.....YYYY......
//.BBBBBBBBBBB..OOOOOOOOOOOO..DDDDDDDDDDD.....YYYY......
//.BBBBBBBBBBB...OOOOOOOOOO...DDDDDDDDDD......YYYY......
//.BBBBBBBBBB......OOOOOO.....DDDDDDDDD.......YYYY......
//...................................................... -->

<body id="body">
  <header>
    <div class="announcement-bar">
Welcome to Team 22's Project    </div>
    <burger-nav>
      <i id="burger-button" class="fa-regular fa-bars"></i>
      <a href="/"><img id="logo-light1" src="/source/logo-light.png"><img id="logo-dark1"
          src="/source/logo-dark.png"></a>
      <a href=""><i class="fa-regular fa-cart-shopping"></i></a>
      <div id="nav-menu" class="nav-menu">
        <ul class="menu">
          <li><a href="#"><i class="fa-regular fa-mobile"></i>Phones</a></li>
          <li><a href="#"><i class="fa-regular fa-tablet"></i>Tablets</a> </li>
          <li><a href="#"><i class="fa-regular fa-game-console-handheld"></i>Consoles</a></li>
          <li><a href="#"><i class="fa-regular fa-folder-plus"></i>Other</a></li>
          <li><a href="/login"><i class="fa-regular fa-user"></i>Profile</a></li>
          <li><a href="#" data-theme-toggle1><i id="sun1" class="fa-regular fa-sun light-theme"></i><i id="moon1"
                class="fa-regular fa-moon dark-theme"></i>Theme</a></li>
        </ul>
      </div>
      <!-- <i class="fa-regular fa-moon"></i> MOOOOOONNNNNNN    -->

    </burger-nav>
    <nav id="nav">
      <div class="logo-menu">
        <a href="/"><img id="logo-light2" src="/source/logo-light.png"><img id="logo-dark2"
            src="/source/logo-dark.png"></a>
        <a href="/search"><i class="fa-regular fa-magnifying-glass"></i></a>
        <search id="searchbox" class="">
          <search-box>
          <<form id="searchForm" action="/search" method="GET">
            <input name="query" placeholder="Search for products" type="text" required>
            <button type="submit" id="search-button" style="border: none; background: none;"><i class="fa-regular fa-arrow-right"></i></button>
          </form>

          </search-box>
        </search>
      </div>
      <div class="main-header">
      <a href="/search-results?category=Phones" class="hover-underline-animation">Phones</a>
      <a href="/search-results?category=Tablets" class="hover-underline-animation">Tablets</a>
      <a href="/search-results?category=Computers" class="hover-underline-animation">Consoles</a>
      <a href="/search-results?category=Consoles" class="hover-underline-animation">Other</a>
    </div>
      </div>

      <div class="main-menu">
        <a data-theme-toggle><i id="sun2" class="fa-regular fa-sun light-theme"></i><i id="moon2"
            class="fa-regular fa-moon dark-theme"></i></a>
        <a href="/login"><i class="fa-regular fa-user"></i></a>
        <a href="/checkout"><i class="fa-regular fa-cart-shopping"></i></a>
      </div>
    </nav>
    <script src="/js/theme-toggle.js"></script>
    <div></div>

  </header>


  <main>
    <content>







      <!-- //.....CCCCCC.......OOOOOO.....NNNN....NNN..TTTTTTTTTTEEEEEEEEEEE..NNNN....NNN..TTTTTTTTTT..
        //...CCCCCCCCC....OOOOOOOOOO...NNNN....NNN..TTTTTTTTTTEEEEEEEEEEE..NNNN....NNN..TTTTTTTTTT..
        //..CCCCCCCCCCC..OOOOOOOOOOOO..NNNNN...NNN..TTTTTTTTTTEEEEEEEEEEE..NNNNN...NNN..TTTTTTTTTT..
        //..CCCC...CCCC..OOOO....OOOO..NNNNN...NNN......TTT....EEE.........NNNNN...NNN......TTT.....
        //..CCC.....CC...OOO......OOO..NNNNNN..NNN......TTT....EEE.........NNNNNN..NNN......TTT.....
        //.CCCC.........OOOO......OOOO.NNNNNNN.NNN......TTT....EEEEEEEEEE..NNNNNNN.NNN......TTT.....
        //.CCCC.........OOOO......OOOO.NNN.NNN.NNN......TTT....EEEEEEEEEE..NNN.NNN.NNN......TTT.....
        //.CCCC.........OOOO......OOOO.NNN.NNNNNNN......TTT....EEEEEEEEEE..NNN.NNNNNNN......TTT.....
        //..CCC.....CC...OOO......OOO..NNN..NNNNNN......TTT....EEE.........NNN..NNNNNN......TTT.....
        //..CCCC...CCCC..OOOO....OOOO..NNN..NNNNNN......TTT....EEE.........NNN..NNNNNN......TTT.....
        //..CCCCCCCCCCC..OOOOOOOOOOOO..NNN...NNNNN......TTT....EEEEEEEEEEE.NNN...NNNNN......TTT.....
        //...CCCCCCCCC....OOOOOOOOOO...NNN....NNNN......TTT....EEEEEEEEEEE.NNN....NNNN......TTT.....
        //.....CCCCCC.......OOOOOO.....NNN....NNNN......TTT....EEEEEEEEEEE.NNN....NNNN......TTT..... -->






      <div class="product-page">
        <div class="product-cat">
        </div>
        <div class="title-wrapper">

          <div class="image-box">
            <div class="main-img">
              <img src="{{ $product->imageURL }}" alt="{{ $product->productName }}">
            </div>
            <button id="left-button"><i class="fa-regular fa-arrow-left"></i></button>
            <div class="image-gallery">
              <img src="{{ $product->imageURL }}" alt="{{ $product->productName }}" alt="">
              <img src="{{ $product->imageURL }}" alt="{{ $product->productName }}" alt="">
              <img src="{{ $product->imageURL }}" alt="{{ $product->productName }}" alt="">
              <img src="{{ $product->imageURL }}" alt="{{ $product->productName }}" alt="">
              <img src="{{ $product->imageURL }}" alt="{{ $product->productName }}" alt="">
            </div>
            <button id="right-button"><i class="fa-regular fa-arrow-right"></i></button>
          </div>

          <div class="product-title">
        
            <h1>{{ $product->productName }}</h1>
            <p>Summary</p>
            <h2>Model selection</h2>
            <p id="grades-popup-button"><i class="fa-regular fa-circle-info"></i>   What do the different grades mean?</p> 
            
            <div id="modal-popup" class="grades-popup-wrapper hidden hidden-opacity">
              <div class="grades-popup">
                <i id="grades-popup-close-button" class="fa-regular fa-x"></i>
                <h1>Our item grading</h1>
                <h3 class="new">Brand New</h3>
                <p>Brand new items are boxed, unopened and brand new.</p>
                <h3>A Grade</h3>
                <p>A Grade items have minimal wear, and come with their original packaging. Expected wear includes very light scratches, and/or packaging damage. </p>
                <h3>B Grade</h3>
                <p>B Grade items typically have small scuffs, scratches, and are in overall good cosmetic condition. These items will sometime have their original packaging included</p>
                <h3>C Grade</h3>
                <p>C Grade items are fairly worn, with scuff, deeper scratches, and cosmetic faults. There will be no cracks, chipped glass/plastic, and will still be fully functional. These items won't have their original packaging included </p>

              </div>
            </div>
            
            <script src="js/grade-modal.js"></script>

            @php
              $brandNewVariant = $product->variants->firstWhere('gradeID', 1);
              $excellentVariant = $product->variants->firstWhere('gradeID', 2);
              $goodVariant = $product->variants->firstWhere('gradeID', 3);
              $fairVariant = $product->variants->firstWhere('gradeID', 4);
            @endphp

            
            <!-- <div class="button-wrapper">
              <button class="n-grade" id="selected-variant-id" data-variant-id="{{ $brandNewVariant->variantID ?? '' }}">
                @if($brandNewVariant)              
                <h3>Brand New</h3>
                <h2>£{{ number_format($brandNewVariant->price, 2) }}</h2>
                <p>In stock</p>
                @else
                <p>Out of stock</p>
                @endif
              </button>
        
              <button class="a-grade"  id="selected-variant-id" data-variant-id="{{ $excellentVariant->variantID ?? '' }}">
              @if($excellentVariant) 
                <h3>Excellent</h3>
                <h2>£{{ number_format($excellentVariant->price, 2) }}</h2>
                <p>In stock</p>
                @else
                <p>Out of stock</p>
                @endif
              </button>

              <button class="b-grade"  id="selected-variant-id" data-variant-id="{{ $goodVariant->variantID ?? '' }}">
              @if($goodVariant)
                <h3>Good</h3>
                <h2>£{{ number_format($goodVariant->price, 2) }}</h2>
                <p>In stock</p>
                @else
                <p>Out of stock</p>
                @endif
              </button>
              
              <button class="c-grade" id="selected-variant-id" data-variant-id="{{ $fairVariant->variantID ?? '' }}">
              @if($fairVariant)
                <h3>Fair</h3>
                <h2>£{{ number_format($fairVariant->price, 2) }}</h2>
                <p>In stock</p>
                @else
                <p>Out of stock</p>
              @endif
              </button>
            </div> -->

            <!-- <script>
              document.addEventListener('DOMContentLoaded', function() {
                  const variantButtons = document.querySelectorAll('.button-wrapper button');
                  const selectedVariantInput = document.getElementById('selected-variant-id');

                  variantButtons.forEach(button => {
                      button.addEventListener('click', function() {
                          // Remove highlight from all buttons
                          variantButtons.forEach(btn => btn.classList.remove('selected'));

                          // Highlight the clicked button
                          this.classList.add('selected');
                          console.log(document.getElementById('selected-variant-id'))
                          // Update the hidden input with the selected variant ID
                          selectedVariantInput.value = this.dataset.variantID;
                      });
                  });
              });
            </script> -->
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                  const buttons = document.querySelectorAll('.button-wrapper .variant-button');
                  const variantInput = document.getElementById('variant-id-input');
                  buttons.forEach(button => {
                      button.addEventListener('click', function() {
                          // Remove 'selected' class from all buttons
                          buttons.forEach(btn => btn.classList.remove('selected'));

                          // Add 'selected' class to clicked button
                          this.classList.add('selected');

                          // Optional: Handle the selected variant ID
                          // For example, store in a hidden input or use directly in a JavaScript function
                          const selectedVariantId = this.dataset.variantId;
                          
                          variantInput.value = selectedVariantId;
                      });
                  });
              });
            </script>
            <div class="button-wrapper">
              @foreach($product->variants as $variant)
              <button class="n-grade variant-button" data-variant-id="{{ $variant->variantID }}">  
              @if($variant->quantity > 0)
                  <h3>{{ $variant->grade->gradeName }}</h3>
                  <h2>£{{ number_format($variant->price, 2) }}</h2>
                  <p>In stock</p>
                  @else
                  <p>Out of stock</p>
                  @endif
                </button>
              @endforeach
            </div>


            <div class="buy-buttons">
              <button class="buy-now">
                <h3>Buy it now</h3>
              </button>

              {{-- <form id="add-to-basket-form" action="{{ route('checkout.addToBasket') }}" method="POST">
                @csrf
                <input type="hidden" name="variant_id" id="variant-id-input" value="{{ $variant->variantID }}">
                <button type="submit" class="add-to-basket" id="add-button">
                    <h3>Add to basket</h3>
                </button>
            </form> --}}
            <form id="add-to-basket-form" action="{{ route('checkout.addToBasket') }}" method="POST">
              @csrf
              <input type="hidden" name="variant_id" id="variant-id-input" value="">
              <input type="number" name="quantity" id="quantity-input" value="1" min="1" required>
              <button type="submit" class="add-to-basket" id="add-button">
                  <h3>Add to basket</h3>
              </button>
          </form>
          
            </div>

          </div>
        </div>

        <div class="product-description">
          <h2>Product Description</h2>
          <p>{{ $product->description }}</p>
        </div>
      

      </div>
      
  
      <script src="js/grid-cycle.js"></script>
      <script src="js/image-gallery.js"></script>



















            <!-- //.............................................................................
//.FFFFFFFFFF....OOOOOO........OOOOOO.....TTTTTTTTTTTEEEEEEEEEE..RRRRRRRRR.....
//.FFFFFFFFFF..OOOOOOOOOO....OOOOOOOOOO...TTTTTTTTTTTEEEEEEEEEE..RRRRRRRRRRR...
//.FFFFFFFFFF.OOOOOOOOOOOO..OOOOOOOOOOOO..TTTTTTTTTTTEEEEEEEEEE..RRRRRRRRRRR...
//.FFF........OOOO....OOOO..OOOO....OOOO......TTT....EEE.........RRR.....RRR...
//.FFF........OOO......OOO..OOO......OOO......TTT....EEE.........RRR.....RRR...
//.FFFFFFFFF.FOOO......OOOOOOOO......OOOO.....TTT....EEEEEEEEEE..RRRRRRRRRRR...
//.FFFFFFFFF.FOOO......OOOOOOOO......OOOO.....TTT....EEEEEEEEEE..RRRRRRRRRR....
//.FFFFFFFFF.FOOO......OOOOOOOO......OOOO.....TTT....EEEEEEEEEE..RRRRRRRR......
//.FFF........OOO......OOO..OOO......OOO......TTT....EEE.........RRR..RRRR.....
//.FFF........OOOO....OOOO..OOOO....OOOO......TTT....EEE.........RRR...RRRR....
//.FFF........OOOOOOOOOOOO..OOOOOOOOOOOO......TTT....EEEEEEEEEEE.RRR....RRRR...
//.FFF.........OOOOOOOOOO....OOOOOOOOOO.......TTT....EEEEEEEEEEE.RRR....RRRR...
//.FFF...........OOOOOO........OOOOOO.........TTT....EEEEEEEEEEE.RRR.....RRRR..
//............................................................................. -->
</content>
</main>
<footer>
    <content>
        <div class="info-footer">
          <h1>          Made with love from TP22
          </h1>
        </div>
        <div class="horizontal-footer">
            <div class="vert">
                <a href="about">About Us</a>
                <a href="terms">Terms & Conditions</a>
                <a href="return">Return Policy</a>
                <a href="privacy">Privacy Policy</a>
            </div>
            <div class="vert">
                <a href="faq">FAQs</a>
                <a href="contact">Contact Us</a>
            </div>
            <ul class="ul">
            <div class="vert">
            <a href="/search-results?category=Phones" class="hover-underline-animation">Phones</a>
            <a href="/search-results?category=Tablets" class="hover-underline-animation">Tablets</a>
            <a href="/search-results?category=Computers" class="hover-underline-animation">Consoles</a>
            <a href="/search-results?category=Consoles" class="hover-underline-animation">Other</a>
            </div>
            </ul>
        </div>
    </content>
</footer>
</body>

</html>
