<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Incredible Youth International</title>


    <link rel="stylesheet" href="style.css" />
	  <noscript><link rel="stylesheet" href="assets/css/fontawesome-all.min.css" /></noscript>
    

    <style>

     /* .ico{
        padding: 20px;
        margin-left:10 30px;
      }*/

    </style>

  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container">
        <div class="navbar-brand">
          <a href="/">
            <img src="img/logo.png" alt="logo" width="20" height="20" />
          </a>
        </div>

        <ul class="navbar-nav-left">
          <li><a href="/">Home</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="contact">Contact Us</a></li>
          <li><a href="blog">Blog</a></li>
          <li><a href="outreach">Outreach</a></li>
        </ul>

        <ul class="navbar-nav-right">
          <li><a href="/"><span>Incredible Youth International</span></a></li>
          <li><button class="btn btn-dark"><a href="https://dashboard.flutterwave.com/donate/sbn6rjf4sw5n">Donate</a></button></li>
          <li>
                @if (Route::has('login'))
                
                    @auth
                    <x-app-layout>

                    </x-app-layout>
                        
                    @else
                        <li><button class="btn btn-dark-outline"><a href="{{ route('login') }}" >Log in</a></button></li>

                        @if (Route::has('register'))
                            <li><button class="btn btn-dark-outline"><a href="{{ route('register') }}" >Register</a></button></li>
                        @endif
                    @endauth
            
                @endif
          </li>
        
          

        
        </ul>

        <!-- Hamburger Menu -->
        <button type="button" class="hamburger" id="menu-btn">
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden" id="menu">
        <ul class="navbar-nav-left">
            <li><a href="/">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact Us</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="outreach">Outreach</a></li>
        </ul>
      

      <div class="mobile-menu-bottom">
        <button class="btn btn-dark"><a href="https://dashboard.flutterwave.com/donate/sbn6rjf4sw5n">Donate</a></button>
        <button class="btn btn-dark-outline">Log in</button>
        <button class="btn btn-dark-outline">Register</button>
        
        <div>
          <a href="/">
            <span>Incredible Youth International</span>
          </a>
        </div>
      </div>
    </div>


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>This feature is coming soon to Incredible Youth International still under development a work in progress.</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="divider"></div>

    <footer class="footer">
      <div class="footer-container">
        <div class="ico">
        <a href="#"><img src="icons/facebook.png" height="36" width="36"/></a>
				<a href="#"><img src="icons/insta.png" height="36" width="36"/></a>
        <a href="#"><img src="icons/youtube.png" height="36" width="36"/></a>
        <a href="#"><img src="icons/twitter.png" height="36" width="36"/></a>
        <a href="#"><img src="icons/pin.png"  height="36" width="36"/></a>
        <a href="#"><img src="icons/gmail.png"  height="36" width="36"/></a>
      </div>
        <p>Incredible Youth International &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>