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

    <!-- Box A -->
    <section class="box box-a bg-primary text-center py-md">
      <div class="box-inner">
        <h2 class="text-xl">Welcome to Incredible Youth International</h2>
        <p class="text-md">
          <i>Empowering the next generation</i><br>
          <a href="about">Learn more</a>
        </p>
      </div>
    </section>

    <!-- Box B -->
    <section class="box box-b bg-secondary grid-col-2">
      <img src="img/iyi/20.jpg" alt="" />
      <div class="box-text">
        <h2 class="text-xl">Education</h2>
        <p class="text-md">
          School Outreaches, Youth camps &amp; career guidance. It is under this key factor that Incredible Youth International in partnership with the Ministry of Education and
           sports established 20th March as the National Career Guidance Day.
           The key objectives for this day are;
        </p>
        <a href="outreach" class="btn btn-light-outline">Learn more</a>
      </div>
    </section>

    <!-- Box C -->
    <section class="box box-c bg-secondary grid-col-2 grid-reversed">
      <img src="img/iyi/78.jpg" alt="" />
      <div class="box-text">
        <h2 class="text-xl">Talent</h2>
        <p class="text-md">
            Mentorship, Talent Development &amp; Promotion
        </p>
        <a href="contact" class="btn btn-light-outline">Learn more</a>
      </div>
    </section>

    <!-- Box D -->
    <section class="box box-d bg-primary grid-col-2">
      <img src="img/iyi/45.jpg" alt="" />
      <div class="box-text">
        <h2 class="text-xl">Profession</h2>
        <p class="text-md">
          Consultancy Services, Internship &amp; Life skills
        </p>
        <a href="contact" class="btn btn-light-outline">Learn more</a>
      </div>
    </section>

    <!-- Box E -->
    <section class="box box-e bg-secondary grid-col-2 grid-reversed">
      <img src="img/iyi/59.jpg" alt="" />
      <div class="box-text">
        <h2 class="text-md">Business</h2>
        <p class="text-sm">
          In this field, we have successfully established a forum called Uganda Youth In agriculture where we are currently 
          running an Agri-business project where we are training 100
          youth in agricultural skills at our center in Mukono and Namayingo
        </p>
        <a href="outreach" class="btn btn-light-outline">Learn more</a>
      </div>
    </section>

<!-- Box F -->
<section class="box box-f grid-col-2">
  <div>
    <img src="img/iyi/93.jpg" alt="" />
    <div class="bg-extra py-lg">
      <div class="box-text">
        <h2 class="text-md">The Knowledge Hub</h2>
        <p class="text-sm">
          Incredible Youth International does not stop at offering career guidance to the youth when only 
          still in school but we also prepare them for the employment world through the different pieces of 
          training that we give at our hub.
        </p>
        <a href="comingsoon" class="btn btn-dark-outline">Learn more</a>
      </div>
    </div>
  </div>
  <div>
    <img src="img/iyi/39.jpg" alt="" />
    <div class="bg-primary py-lg">
      <div class="box-text">
        <h2 class="text-md">Corporate Networking BBQ</h2>
        <p class="text-sm">
          This event focuses on establishing mutually beneficial relationships with other people. 
          For instance, Incredible Youth International Partners &amp; Well-wishers meet to network, connect and share ideas on their different fields of expertise.
        </p>
        <a href="comingsoon" class="btn btn-light-outline">Learn more</a>
      </div>
    </div>
  </div>
</section>



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
