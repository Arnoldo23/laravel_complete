<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Incredible Youth International</title>

    
    

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
    <!-- Custom CSS Libraries -->
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
                    <h2>Incredible Youth International OutReach Projects</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- PROJECT -->
    <section id="project" class="parallax-section">
        <div class="container">
            <div class="section-header text-center">
                <p></p>
                <h2>Sensitisation OutReach Kololo Airstrip</h2>
            </div>
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/1.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/39.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/36.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/37.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>   
                
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/40.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div> 

                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/41.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div> 

                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/57.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div> 

                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/58.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div> 

            </div>
        </div>
    </section>

    <section id="project" class="parallax-section">
        <div class="container">
            <div class="section-header text-center">
                <p></p>
                <h2>Career Guidance in Various Schools</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/22.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/17.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/4.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/38.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/54.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/73.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/63.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/iyi/56.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project" class="parallax-section">
        <div class="container">
            <div class="section-header text-center">
                <p></p>
                <h2>Estonia Agricultural OutReach Project</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/5.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/6.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/13.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/16.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/7.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/8.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/21.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                        <a href="" class="image-popup">
                            <img src="img/estonia/19.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
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




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

  </body>
</html>