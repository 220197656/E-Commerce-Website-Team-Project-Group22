<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SBEX Market</title>
  <!-- This is the general CSS file for all pages default theme -->
  <link rel="stylesheet" href="/css/index.css">
  <!-- This lower line is css for this page only -->
  <link rel="stylesheet" href="/css/dashboard.css">  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="/source/favicon.png" type="image/x-icon">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="js/slideshow.js"></script>
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
      SALE: USE CODE 50OFF FOR 50% OFF
    </div>
    <burger-nav>
      <i id="burger-button" class="fa-regular fa-bars"></i>
      <a href="/"><img id="logo-light1" src="/source/logo-light.png"><img id="logo-dark1"
          src="/source/logo-dark.png"></a>
      <a href=""><i class="fa-regular fa-cart-shopping"></i></a>
      <div id="nav-menu" class="nav-menu">
        <ul class="menu">
          <li><a href="#"><i class="fa-regular fa-mobile"></i>Phones</a></li>
          <li><a href="#"><i class="fa-regular fa-tablet"></i>Tablets</a> </li>
          <li><a href="#"><i class="fa-regular fa-laptop"></i>Computers</a></li>
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
        <a href="#" id="search-button"><i class="fa-regular fa-magnifying-glass"></i></a>
        <search id="searchbox" class="">
          <search-box>
            <input placeholder="Search for products" type="text">
            <a href="#" id="search-close"><i class="fa-regular fa-arrow-right"></i></a>
          </search-box>
        </search>
        <script src="../js/search-box.js"></script>
      </div>
      <div class="main-header">
        <a href="/products/phones/" class="hover-underline-animation" id="dd1">Phones</a>
        <a href="/products/tablets/" class="hover-underline-animation" id="dd2">Tablets</a>
        <a href="/products/computers/" class="hover-underline-animation" id="dd3">Computers</a>
        <a href="/products/consoles/" class="hover-underline-animation" id="dd4">Consoles</a>
        <a href="/products/other/" class="hover-underline-animation" id="dd5">Other</a>

      </div>
      <div class="main-menu">
        <a data-theme-toggle><i id="sun2" class="fa-regular fa-sun light-theme"></i><i id="moon2"
            class="fa-regular fa-moon dark-theme"></i></a>
        <a href="/login"><i class="fa-regular fa-user"></i></a>
        <a href=""><i class="fa-regular fa-cart-shopping"></i></a>
      </div>
    </nav>
    <script src="/js/theme-toggle.js"></script>
    <div></div>
    <!-- Divs used for dropdown menus -->
    <dd-wrapper>

      <dropdown class="dd-dd1" id="dd-dd1">
        <div class="drop-column">
          <a href="">Test Item long 1me</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>

      </dropdown>
      <dropdown class="dd-dd2" id="dd-dd2">
        <div class="drop-column">
          <a href="">Test Item long 2</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>

      </dropdown>

      <dropdown class="dd-dd3" id="dd-dd3">
        <div class="drop-column">
          <a href="">Test Item long 3</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
      </dropdown>

      <dropdown class="dd-dd4" id="dd-dd4">
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
      </dropdown>

      <dropdown class="dd-dd5" id="dd-dd5">
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>
        <div class="drop-column">
          <a href="">Test Item long name</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>
          <a href="">Test Item long name blah</a>

        </div>

      </dropdown>
    </dd-wrapper>
    <script src="js/dropdown.js"></script>
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

        <script type="text/javascript">
            // Convert PHP array to JSON and log it in the browser's console
            console.log(@json(auth()->user()));
        </script>


      <div class="top-bar">

        <h2>Welcome {{ Auth::user()->name }}</h2>

        <form method="POST" class="logout" action="{{ route('logout') }}">
          @csrf
            <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                      this.closest('form').submit();">
            <h3>Log Out</h3>
        </x-dropdown-link>
        </form>

      </div>


        
      <div class="account-wrapper">
        <div class="address-wrapper">

          <div class="address-list">
            <script>
              function toggleAddressDropdown(addressId) {
                var address = document.getElementById(addressId);
                var address = document.getElementById(addressId);
                if (address.classList.contains("open")) {
                  address.classList.remove("open");
                } else {
                  address.classList.add("open");
                }
              }
            </script>
            <h3 class="address-list-title">Address List</h3>
            <button class="add-address" onclick="togglePopup3('popup-3')">Add New Address</button>
            <div onclick="toggleAddressDropdown('address')"><i class="fa-regular fa-caret-down"></i></div>
            <div id="address" class="items">

            @foreach(auth()->user()->shippingAddresses as $address)
                <div id="address{{ $address->addressID }}" class="address"> <!-- Assuming addressID is your unique identifier -->
                    <div class="stack1">
                        <div class="field">
                            <h3>First Name</h3>
                            <p>{{ $address->firstName }}</p> 
                        </div>
                        <div class="field">
                            <h3>Last Name</h3>
                            <p>{{ $address->lastName }}</p> 
                        </div>
                        <div class="field">
                            <h3>Company</h3>
                            <p>{{ $address->company }}</p> 
                        </div>
                        <div class="field">
                            <h3>1st Line of address</h3>
                            <p>{{ $address->addressLine1 }}</p> 
                        </div>
                        <div class="field">
                            <h3>2nd Line of address</h3>
                            <p>{{ $address->addressLine2 }}</p> 
                        </div>
                    </div>
                    <div class="stack1">
                        <div class="field">
                            <h3>City</h3>
                            <p>{{ $address->city }}</p> 
                        </div>
                        <div class="field">
                            <h3>County</h3>
                            <p>{{ $address->county }}</p> 
                        </div>
                        <div class="field">
                            <h3>Country</h3>
                            <p>{{ $address->country }}</p> 
                        </div>
                        <div class="field">
                            <h3>Post Code</h3>
                            <p>{{ $address->postCode }}</p> 
                        </div>
                        <div class="field">
                            <h3>Telephone</h3>
                            <p>{{ $address->phoneNumber }}</p> 
                        </div>
                    </div>
                    {{-- Edit Button, Remove Button --}}
                    <div class="button-wrapper">
                        <button onclick="togglePopup2('popup-2')">Edit</button>
                        <button onclick="togglePopup('popup-1')">Remove</button>
                    </div>
                </div>
            @endforeach

            
          </div>

        </div>
              
        <div class="order-wrapper">
        @foreach ($orders as $order)
          <div class="order">
            <p class="id">Order ID: {{ $order->orderID }}</p> 
            <p class="total">Total Amount: £{{ $order-> totalAmount }}</p>
            <p class="date">Order Date: {{ $order-> orderDate }} </p>
            
            <h3 class="purchased-items-title">Purchased items</h3>
            <div onclick="toggleOrderDropdown('order1')"><i class="fa-regular fa-caret-down"></i></div>
              <div id="order1" class="items">
                <h3>Image</h3>
                <h3>Item Name</h3>
                <h3>Condition</h3>
                <h3>Unit Price</h3>
                <h3>Qty</h3>
                <h3>Total Price</h3>
                @foreach($order->items as $item)
                <a><img src="{{ $item->product->imageURL }}" alt=""></a>
                <a href="/product/{{$item->product->productID}}">{{ $item->product->productName }}</a>
                <a>Brand new</a>
                <a>£{{ number_format($item->price, 2) }}</a>
                <a>{{$item->quantity}}</a>
                <a>£{{ number_format($item->price * $item->quantity, 2) }}</a>
                @endforeach
              </div>
              
            
          </div>
          @endforeach
        </div>

        <script>
              function toggleOrderDropdown(orderId) {
                var order = document.getElementById(orderId);
                var order = document.getElementById(orderId);
                if (order.classList.contains("open")) {
                  order.classList.remove("open");
                } else {
                  order.classList.add("open");
                }
              }
            </script>
        

      </div>

      <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
        <p>Do you want to remove this Address?</p>
                <button class="btnPopupYes"onclick = "removeFunction()">Yes</button>
                <button class="btnPopupNo"onclick="togglePopup()">No</button>
    
        </div>
    </div>
    <script>function togglePopup(button)
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
      </script>
    
    <div class="popup2" id="popup-2">
      <div class="overlay"></div>
      <div class="content">
          <p>Edit Address</p>
              <form method="POST" action="">
                  @csrf
                  <input type="hidden" name="variantID" id="variantIDInput" value="">
                  <input class="changeForm" type="text" name="fName" placeholder="First Name" required>
                  <input class="changeForm" type="text" name="lName" placeholder="Last Name" required>
                  <input class="changeForm" type="text" name="company" placeholder="Company Name" required>
                  <input class="changeForm" type="text" name="firstLine" placeholder="First Line" required>
                  <input class="changeForm" type="text" name="secondLine" placeholder="Second Line" required>
                  <input class="changeForm" type="text" name="city" placeholder="City" required>
                  <input class="changeForm" type="text" name="county" placeholder="County" required>
                  <input class="changeForm" type="text" name="country" placeholder="Country" required>
                  <input class="changeForm" type="text" name="postCode" placeholder="Postcode" required>
                  <input class="changeForm" type="number" name="telephone" placeholder="Telephone" required>
                  <div class="button-wrapper">
                    <button type="submit" class="btnPopupYes">Confrim Changes</button>
                    <button type="button" class="btnPopupNo" onclick="togglePopup2('popup-2')">Cancel</button>
                  </div>
              </form>
      </div>
  </div>

  <script>function togglePopup2(button)
    {
            const popup = document.getElementById("popup-2");
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
                popupContent.style.transform = "";}
    } 
    </script>
  
  <div class="popup2" id="popup-3">
    <div class="overlay"></div>
    <div class="content">
        <p>Edit Address</p>
            <form method="POST" action="">
                @csrf
                <input type="hidden" name="variantID" id="variantIDInput" value="">
                <input class="changeForm" type="text" name="fName" placeholder="First Name" required>
                <input class="changeForm" type="text" name="lName" placeholder="Last Name" required>
                <input class="changeForm" type="text" name="company" placeholder="Company Name" required>
                <input class="changeForm" type="text" name="firstLine" placeholder="First Line" required>
                <input class="changeForm" type="text" name="secondLine" placeholder="Second Line" required>
                <input class="changeForm" type="text" name="city" placeholder="City" required>
                <input class="changeForm" type="text" name="county" placeholder="County" required>
                <input class="changeForm" type="text" name="country" placeholder="Country" required>
                <input class="changeForm" type="text" name="postCode" placeholder="Postcode" required>
                <input class="changeForm" type="number" name="telephone" placeholder="Telephone" required>
                <div class="button-wrapper">
                  <button type="submit" class="btnPopupYes">Confirm Changes</button>
                  <button type="button" class="btnPopupNo" onclick="togglePopup3('popup-3')">Cancel</button>
                </div>
            </form>
    </div>
</div>

<script>function togglePopup3(button)
  {
          const popup = document.getElementById("popup-3");
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
              popupContent.style.transform = "";}
  } 
  </script>


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
            <div class="vert">
                <a>Phones</a>
                <a>Tablets</a>
                <a>Computers</a>
                <a>Consoles</a>
                <a>Others</a>
            </div>
        </div>
    </content>
</footer>
</body>

</html>