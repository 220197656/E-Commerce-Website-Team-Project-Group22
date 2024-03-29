<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/faq.css">
    {{-- <link rel="stylesheet" href="/css/home.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/source/favicon.png" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="../js/burger.js"></script>



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

            <div class="returns">
                <div class="returns-content">
                    <div class="returns-text">
                        <script>
                            // Simple JavaScript function to toggle the visibility of an answer
                            function toggleAnswer(faqId) {
                                var answer = document.getElementById(faqId);
                                if (answer.style.display === "none") {
                                    answer.style.display = "block";
                                } else {
                                    answer.style.display = "none";
                                }
                            }
                        </script>
                        <h1>Frequently Asked Questions (FAQs)</h1>
    
                        <div onclick="toggleAnswer('faq1')" style="cursor:pointer;">
                            <h2>Q: How do I create an account on SBEX?</h2>
                        </div>
                        <p id="faq1" style="display:none;">Creating an account is easy and free! Just click on the 'Profile' button at the top right corner of our homepage and follow the instructions. You'll need to provide some basic information like your name, email address, and a password. Once registered, you can start buying, selling, or exchanging electronics right away!</p>
                        
                        <div onclick="toggleAnswer('faq2')" style="cursor:pointer;">
                            <h2>Q: What types of electronics can I buy, sell, or exchange on SBEX?</h2>
                        </div>
                        <p id="faq2" style="display:none;">At SBEX, you can deal with a wide range of electronics including smartphones, tablets, laptops, gaming consoles, and accessories. We ensure a diverse selection so you can find exactly what you're looking for or sell items you no longer need.</p>
                        
                        <div onclick="toggleAnswer('faq3')" style="cursor:pointer;">
                            <h2>Q: How do I know the electronics I buy are in good condition?</h2>
                        </div>
                        <p id="faq3" style="display:none;">All electronics listed for sale undergo a thorough verification process to ensure they meet our quality standards. Sellers are required to provide detailed descriptions and photos of their items. We also encourage buyers to review seller ratings and ask questions directly to the seller for additional assurance.</p>
                        
                        <div onclick="toggleAnswer('faq4')" style="cursor:pointer;">
                            <h2>Q: What should I do if I receive a defective item?</h2>
                        </div>
                        <p id="faq4" style="display:none;">If you receive a defective item, please contact our customer service team within 48 hours of receiving the product. Provide details of the defect and any relevant photos or documentation. Our team will assist you in arranging a return, exchange, or refund according to our return policy and the specifics of your case.</p>
                        
                        <div onclick="toggleAnswer('faq5')" style="cursor:pointer;">
                            <h2>Q: Can I change or cancel my order after placing it?</h2>
                        </div>
                        <p id="faq5" style="display:none;">Yes, you can change or cancel your order within 24 hours of placing it. Please contact our customer service team with your order number and the changes you wish to make or to request a cancellation. Note that once the order is processed or shipped, changes and cancellations may not be possible.</p>
                        
                        <script>
                            // Ensure that all the FAQs are hidden initially on page load
                            document.addEventListener("DOMContentLoaded", function() {
                                var faqs = document.querySelectorAll('p');
                                faqs.forEach(function(faq) {
                                    faq.style.display = 'none';
                                });
                            });
                        </script>
                    </div>
                </div>
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
