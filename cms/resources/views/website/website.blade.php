<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BullyProof Hockey</title>
    <!-- font -->
    <link href="https://fonts.cdnfonts.com/css/heavitas" rel="stylesheet">
                
    <!-- linking css -->
    <link rel="stylesheet" href="{{ asset('assets/website/css/main.css')}}">
    <!-- favicon-->
    <link rel="icon" href="{{ asset('assets/website/favicon.ico')}}" type="image/x-icon">
</head>
<body>
    <!-- header -->
    <h1 class="hidden">Hidden</h1>
        
    <!-- nav menu -->
    <section class="navbar">
        <h2 class="hidden">Hidden</h2>
        <div class="navbar_align2">
            <div class="logomain">
                <a href="index.html" class="navbar-logo">
                <img src="{{ asset('assets/website/images/logo.svg')}}" alt="logo" class="logo">
                </a>
            </div>
        </div>
        <nav class="navbar1">
            <ul class="navbar-list">
              <li class="navbar_align" data-navbar>    
                <a href="#support" class="navbar-link" data-nav-link>Support</a>
              </li>
              <li class="navbar_align" data-navbar>    
                <a href="#aboutus" class="navbar-link" data-nav-link>About</a>
              </li>
              <li class="navbar_align" data-navbar>    
                <a href="#events" class="navbar-link" data-nav-link>Events</a>
              </li>
              <li class="navbar_align" data-navbar>    
                <a href="#testimonials" class="navbar-link" data-nav-link>Testimonials</a>
              </li>
              <li class="navbar_align" data-navbar>    
                <a href="#contact_sectionx" class="navbar-link" data-nav-link>Contact</a>
              </li>
              <li class="navbar_align" data-navbar>    
                <a href="#Donate" class="navbar-link" data-nav-link><button class="btn1">Donate</button></a>
              </li>
              <li class="navbar_align" data-navbar>    
                <a href="tel:1-800-273-8255" class="navbar-link" data-nav-link><button class="btn2">Help Phone</button></a>
                
              </li>
            </ul>
          </nav>
          
          
            <!-- for mobile view -->
            <div class="navbar-toggle" data-navbar-toggle>
                <span class="navbar-toggle-icon">
                    <span class="navbar-toggle-icon-bar"></span>
                    <span class="navbar-toggle-icon-bar"></span>
                    <span class="navbar-toggle-icon-bar"></span>
                </span>
            </div>
    </section>


@yield('content')

<!-- footer -->
<footer id="footer">
  <div class="footer">
      <div class="footer1">
          <p class="footer_heading">
              <p class="footer_heading-text">Visit Us</p></p>
          <p class="footer_text">
              58 Middle Point Rd,
              <br>San Francisco, 94124
          </p>
          <ion-icon name="logo-facebook" class="icon"></ion-icon>
          <ion-icon name="logo-twitter" class="icon"></ion-icon>
          <ion-icon name="logo-instagram" class="icon"></ion-icon>
          <ion-icon name="logo-youtube" class="icon"></ion-icon>
      </div>
      <div class="footer2">
          <p class="footer_heading">
              <p class="footer_heading-text">Contact Us</p></p>
          <p class="footer_text">
            <h4 class="number1">+1 437-679-3869</h4> 
              <br>
             <h4 class="number2">+1 123-456-7890</h4>
              <br>
              <h4 class="number3">contact@bullyproof.com</h4>
          </p>
      </div>
      </div>
      </div>
</footer><!-- close footer -->


<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/vue-router@4"></script>
<script src="js/main.js" type="module"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

 
