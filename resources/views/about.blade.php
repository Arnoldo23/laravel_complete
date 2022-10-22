<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Incredible Youth International | About Us</title>

    <link rel="stylesheet" href="style.css" />
		<noscript><link rel="stylesheet" href="assets/css/fontawesome-all.min.css" /></noscript>

    <style>
       /* .box.box-a.bg-primary.text-center.py-md{
            background-image: url(assets/css/images/iyi/DSC_3267.JPG);
            background-position: fixed;
            background-repeat: none;
            background-size: cover;
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

    <!-- Box B -->
    <section class="box box-b bg-secondary grid-col-2">
        <img src="img/iyi/5.jpg" alt="" />
        <div class="box-text">
          <h2 class="text-xl">About Us</h2>
          <p class="text-md">
            Incredible Youth International was born out of a call to see the world become a better place through leaders who demonstrate humility and giving. 
            We believe that the quality of a country resides in the quality of its youth. That is why we invest in them to become responsible citizens. Incredible Youth International 
            promotes the values of transparency, accountability, and respect for human rights, social justice, economic excellence, and integrity.
          </p>
        </div>
      </section>

  <!-- Box A -->
  <section class="box box-a bg-primary text-center py-md">
    <div class="box-inner">
      <h2 class="text-xl">Company Profile</h2>
      <p class="text-md">
        <i>The Incredible Youth International (IYI) is a youth-led movement with the aim of empowering and grooming young people to become agents of positive change who embody the principles of humility and generosity in their spheres of influence.
           I.Y.I is a registered Ugandan non-governmental organization (NGO), that was founded in 2005 and registered on 25th July 2007.’’ 
          It has a large network of young people, in 60 countries who share and embody the core values of IYI. Currently, IYI works with youths in secondary schools and 
          tertiary institutions and out-of-school youths, across Uganda. These young people are from IYI youth clubs in over 1600 schools of operation and several youth groups for out-of-school youths. 
          The youths are between 12 and 35 years of age. Out-of-school youths include fresh graduates, young professionals, and youth with no formal education. In-school youth form the IYI clubs while the out-of-school youths form 
          youth groups of not more than 50 committed members per youth group. The youth groups identify areas of talent development. Funding is mobilized amongst the group members to run the projects. Outreaches to the formed youth clubs and groups are routinely conducted by IYI management, to support, empower, and direct the focused young minds to exploration and learning. IYI conducts youth exchange programs with international youths to share and learn from each other. 
          The youth teams are led by selected youth leaders from the groups and are mentored by identified suitable responsible persons
        </i><br>
      </p>
    </div>
  </section>


  <!-- Box F -->
  <section class="box box-f grid-col-2">
    <div>
      <img src="img/iyi/93.jpg" alt="" />
      <div class="bg-extra py-lg">
        <div class="box-text">
          <h2 class="text-md">CEO &amp; President of Incredible Youth International</h2>
          <p class="text-sm">
            Incredible Youth International does not stop at offering chool but we also prepare them for the employment world through the different pieces of training that we give at our hub where they are later connected to different internship programs and future employers
          </p>
          <a href="comingsoon" class="btn btn-dark-outline">Learn more</a>
        </div>
      </div>
    </div>
    <div>
      <img src="img/iyi/80.jpg" alt="" />
      <div class="bg-primary py-lg">
        <div class="box-text">
          <h2 class="text-md">  Corporate Networking BBQ</h2>
          <p class="text-sm">
            This event focuses on establishing mutually beneficial relationships with other people. For instance, IYI Partners and IYI Well-wishers meet to network, connect and share ideas on their different fields of expertise. 

          </p>
          <a href="comingsoon" class="btn btn-light-outline">Learn more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="box box-a bg-secondary text-center py-md">
    <div class="box-inner">
      <h2 class="text-xl">Vision</h2>
      <p class="text-md">
        <i>
         To nurture and help the youth realize their potential by creating opportunities that will contribute towards achieving their enterprises and sustainable Development Goals in Uganda, Africa and globally. 
        </i><br>
      </p>
    </div>
  </section>
  
  <section class="box box-a bg-primary text-center py-md">
    <div class="box-inner">
      <h2 class="text-xl">Mission</h2>
      <p class="text-md">
        <i>
          To empower young individuals and their communities to be effective agents of change and establish a true network of young entrepreneurs, leaders and innovators. 
        </i><br>
      </p>
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