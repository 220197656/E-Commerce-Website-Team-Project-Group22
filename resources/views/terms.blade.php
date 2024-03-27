<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="/css/index.css">
    {{-- <link rel="stylesheet" href="/css/about.css"> --}}
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

            <div class="about">
                <div class="about-content">
                    <div class="about-text">
                        <h1>Terms and Conditions</h1>

    <p>Welcome to SBEX, the Sell Buy Exchange Marketplace. By accessing our website at hwalczak.co.uk, you agree to be bound by these terms and conditions, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>

    <h2>1. Use License</h2>
    <ul>
        <li>Permission is granted to temporarily download one copy of the materials (information or software) on SBEX's website for personal, non-commercial transitory viewing only.</li>
        <li>Under this license, you may not:
            <ul>
                <li>modify or copy the materials;</li>
                <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                <li>attempt to decompile or reverse engineer any software contained on SBEX's website;</li>
                <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
            </ul>
        </li>
        <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by SBEX at any time.</li>
    </ul>

    <h2>2. Disclaimer</h2>
    <p>The materials on SBEX's website are provided on an 'as is' basis. SBEX makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>

    <h2>3. Limitations</h2>
    <p>In no event shall SBEX or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on SBEX's website.</p>

    <h2>4. Accuracy of Materials</h2>
    <p>The materials appearing on SBEX's website could include technical, typographical, or photographic errors. SBEX does not warrant that any of the materials on its website are accurate, complete, or current. SBEX may make changes to the materials contained on its website at any time without notice.</p>

    <h2>5. Links</h2>
    <p>SBEX has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by SBEX of the site. Use of any such linked website is at the user's own risk.</p>

    <h2>6. Modifications</h2>
    <p>SBEX may revise these terms of service for its website at any time without notice. By using this website, you are agreeing to be bound by the then current version of these terms of service.</p>

    <h2>7. Governing Law</h2>
    <p>These terms and conditions are governed by and construed in accordance with the laws of the United Kingdom and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>

    <h2>8. Marketplace Transactions</h2>
    <p>Users are responsible for reading the full item listing before making a commitment to buy. SBEX provides a platform for third-party sellers and buyers to negotiate and complete transactions. SBEX is not involved in the actual transaction between sellers and buyers and is not the agent of and has no authority for either for any purpose. SBEX does not guarantee the truth or accuracy of listings, the ability of sellers to sell items, or the ability of buyers to pay for items.</p>

    <h2>9. User Conduct</h2>
    <p>Users agree not to post, list or upload content or items in inappropriate categories on our site. Users agree not to breach or circumvent any laws, third-party rights or our systems, policies, or determinations of your account status.</p>

    <h2>10. Account Termination</h2>
    <p>SBEX reserves the right to terminate your account and restrict your use of all or any part of the Website for any or no reason, without notice, and without liability to you or anyone else.</p>

    <h2>Contact Us</h2>
    <p>For any questions regarding these Terms and Conditions, please contact us via our contact form.</p>





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
