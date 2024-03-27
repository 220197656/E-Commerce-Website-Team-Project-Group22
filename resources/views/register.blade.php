<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/login.css">
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



      <!-- <div class="form-container">
        <div class="login-container">
            <h1 class="login-header">Login</h1>
            <form id="loginForm">
                <input type="text" id="loginUsername" name="username" required placeholder="User">
                <input type="password" id="loginPassword" name="password" required placeholder="Password">
                <div class="button-container">
                    <button class="signup" type="button" href="../html/register.html">Sign Up</i></button>
                    <button class="forgot" type="button" href="../html/reset-password.html">Forgot Password?</i></button>
                    <button class="send" type="submit"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
            </form>
        </div> -->

      <div class="form-container">
        <div class="register-container">
          <h2 class="register-header">Signup</h2>
          <form id="signupForm" method="POST" action="/register/submit">
            @csrf

            <input type="text" placeholder="Username" id="signupUsername" name="username" required><br>
            <input type="email" placeholder="Email Address" id="signupEmail" name="Email" required><br>
            <input type="tel" placeholder="Phone Number" id="signupPhone" name="PhoneNumber" required><br>
            <input type="text" placeholder="First Name" id="signupFirstName" name="FirstName" required><br>
            <input type="text" placeholder="Last Name" id="signupLastName" name="LastName" required><br>
            <input type="password" placeholder="Password" id="signupPassword" name="password" required><br>
            <input type="password" placeholder="Confirm Password" id="signupPasswordConfirmation" name="Password_confirmation" required><br>

            <button type="submit">Signup</button>

            @if ($errors->has('username'))
            <div>{{ $errors->first('username') }}</div>
            @endif
            @if ($errors->has('Email'))
            <div>{{ $errors->first('Email') }}</div>
            @endif
            @if ($errors->has('PhoneNumber'))
            <div>{{ $errors->first('PhoneNumber') }}</div>
            @endif
            @if ($errors->has('password'))
            <div>{{ $errors->first('password') }}</div>
            @endif
          </form>
          <p id="message"></p>
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
