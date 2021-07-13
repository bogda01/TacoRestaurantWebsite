<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar_container">
            <a href="#home" class="logo" id="navbar_logo"><img src="images/logo7.png"></a>
          <div class="navbar_toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
          <ul class="navbar_menu">
            <li class="navbar_item">
              <a href="#home" class="navbar_link" id="menu-page">Home</a>
            </li>
            <li class="navbar_item">
                <a href="#order" class="navbar_link" id="order-page">Order</a>
            </li>
            <li class="navbar_item">
              <a href="#about" class="navbar_link" id="about-page">About Us</a>
            </li>
            <?php
              if(isset($_SESSION['usersid'])) {
                echo" <li class='navbar_item'><a href='includes/logout-inc.php' class='navbar_link' id='log-in'>Log out</a></li> ";
              }
              else {
                echo"<li class='navbar_button'><a href='signup.php' class='button' id='signup'>Sign Up</a>
                </li>";
                echo"<li class='navbar_item'>
                  <a href='login.php' class='navbar_link' id='log-in'>Log in</a>
                </li>";
              }
            ?>
            
          </ul>
        </div>
      </nav>
      <!--Navbar ending-->

      <!--Hero section-->
      <div class="hero" id="home">
        <div class="hero_container">
          <h1 class="hero_heading">Order a <span>taco</span></h1>
          <p class="hero_description">Best tacos in town</p>
          <button class="main_button"><a href="#order">Find your taco</a></button>
        </div>
      </div>
      <!--Hero section ending-->

      <!--Order-->
      <div class="order" id="order">
        <h1>Menu</h1>
        <div class="order_wrapper">
          <div class="order_card">
            <h2>Taco #1</h2>
            <p>Ingredients: ....</p>
            <div class="order_button"><button>Order</button></div>
          </div>
          <div class="order_card">
            <h2>Taco #2</h2>
            <p>Ingredients: ....</p>
            <div class="order_button"><button>Order</button></div>
          </div>
          <div class="order_card">
            <h2>Taco #3</h2>
            <p>Ingredients: ....</p>
            <div class="order_button"><button>Order</button></div>
          </div>
          <div class="order_card">
            <h2>Taco #4</h2>
            <p>Ingredients: ....</p>
            <div class="order_button"><button>Order</button></div>
          </div>
        </div>
      </div>

      <!--Order ending-->

      <!--About us-->
      <div class="main" id="about">
        <div class="main_container">
          <div class="main_img-container">
            <div class="main_img-card"><i class="fas fa-utensils"></i></div>
          </div>
          <div class="main_content">
            <h1>What do we do?</h1>
            <h2>We make tacos</h2>
            <p>Taste our tacos</p>
            <button class="main_button"><a href="#order">Find your taco</a></button>
          </div>
        </div>
      </div>
      <!--About us ending-->

      <!--Location-->
      <div class="main" id="sign-up">
        <div class="main_container">
          <div class="main_content">
            <h1>Come at our locations</h1>
            <h2>You won't regret it</h2>
            <p>Try our tacos</p>
            <button class="main_button"><a href="locations.php">Find us</a></button>
          </div>
          <div class="main_img-container">
            <div class="main_img-card" id="card-2"><img src="images/taco.png"></div>
          </div>
        </div>
      </div>
        <!--Location ending-->
        <!--Footer-->
        <div class="footer_container">
          <div class="footer_link">
            <div class="footer_link-wrapper">
              <div class="footer_link-item">
                <h2>About Us</h2>
                <a href="/sign-up">Menu</a>
                <a href="/sign-up">Who we are</a>
                <a href="/sign-up">Careers</a>
                <a href="/sign-up">Terms of Service</a>
              </div>
              <div class="footer_link-item">
                <h2>Locations</h2>
                <a href="/sign-up">Find a location</a>
                <a href="/sign-up">Order online</a>
                <a href="/sign-up">Restaurant Hours</a>
                <a href="/sign-up">Get directions</a>
              </div>
            </div>
            <div class="footer_link-wrapper">
              <div class="footer_link-item">
                <h2>Careers</h2>
                <a href="/sign-up">Why Tacos</a>
                <a href="/sign-up">Who we are</a>
                <a href="/sign-up">Career Search</a>
                <a href="/sign-up">Submit CV</a>
              </div>
              <div class="footer_link-item">
                <h2>Social Media</h2>
                <a href="/sign-up">Facebook</a>
                <a href="/sign-up">Instagram</a>
                <a href="/sign-up">Twitter</a>
                <a href="/sign-up">Youtube</a>
              </div>
            </div>
          </div>
          <section class="social_media">
            <div class="social_media-wrap">
              <div class="footer_logo">
                <a href="#home" id="footer_logo"><img src="images/logo7.png"></a>
              </div>
              <p class="website_rights">© Tacos 2020. All rights reserved</p>
              <div class="social_icon">
                <a href="#home" class="social_icon-link">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#home" class="social_icon-link">
                  <i class="fab fa-instagram-square"></i>
                </a>
                <a href="#home" class="social_icon-link">
                  <i class="fab fa-twitter-square"></i>
                </a>
                <a href="#home" class="social_icon-link">
                  <i class="fab fa-youtube-square"></i>
                </a>
              </div>
            </div>
          </section>
        </div>
        <!--Footer ending-->
      <script src="javas.js"></script>
  </body>

</html>
