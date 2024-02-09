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
          <li><a href="login"><i class="fa-regular fa-user"></i>Profile</a></li>
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
        <a href="login"><i class="fa-regular fa-user"></i></a>
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







      <div class="slideshow-wrapper">
        <figure class="slideshow-1"></figure>
        <figure class="slideshow-2"></figure>
        <figure class="slideshow-3"></figure>
        <figure class="slideshow-4"></figure>
      </div>
      <div class="slideshow-spacer"></div>

      <!-- <script src="ts/index.js"></script> -->
      <h2 class="section-heading">Best Sellers</h2>
      <div class="pages">
        <a class="first" href=""> <img src="source/logo-light.png">
          <p>Test 1 Page</p>
        </a>
        <a href=""> <img src="source/logo-light.png">
          <p>Test 2 Page</p>
        </a>
        <a href=""> <img src="source/logo-light.png">
          <p>Test 3 Page</p>
        </a>
        <a class="fourth" href=""><img src="source/logo-light.png">
          <p>Test 4 Page</p>
        </a>
      </div>














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
          <a href="terms-and-conditions">Terms & Conditions</a>
          <a href="return-policy">Return Policy</a>
          <a href="privacy-policy">Privacy Policy</a>
        </div>
        <div class="vert">
          <a href="FAQ">FAQs</a>
          <a href="contact-us">Contact Us</a>
        </div>
        <div class="vert">
          <a href="/products/phones/">Phones</a>
          <a href="/products/tablets/">Tablets</a>
          <a href="/products/computers/">Computers</a>
          <a href="/products/consoles/">Consoles</a>
          <a href="/products/misc/">Others</a>
        </div>
      </div>
    </content>
  </footer>
</body>

</html>