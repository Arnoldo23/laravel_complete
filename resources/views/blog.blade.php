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
                    <h2>Incredible Youth International Blog</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <!-- Blog Start -->
     <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest From Blog</p>
                <h2>Learn More from Latest Incredible Youth International Blog</h2>
            </div>
            <div class="row blog-page">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/iyi/39.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-calendar-alt"></i>
                            <p>30-Jun-2022</p>
                        </div>
                        <div class="blog-text">
                            <h2>Kololo Meeting with Ministry of Education Delegates</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/iyi/37.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-calendar-alt"></i>
                            <p>30-Jun-2022</p>
                        </div>
                        <div class="blog-text">
                            <h2>Miss Incredible Youth Award</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/iyi/22.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-calendar-alt"></i>
                            <p>30-Jun-2022</p>
                        </div>
                        <div class="blog-text">
                            <h2>Incredible Youth Seminar Abroad</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/estonia/4.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-calendar-alt"></i>
                            <p>30-Jun-2022</p>
                        </div>
                        <div class="blog-text">
                            <h2>Estoria Agricultural Project launch</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/estonia/8.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-calendar-alt"></i>
                            <p>30-Jun-2022</p>
                        </div>
                        <div class="blog-text">
                            <h2>Procurement &amp; supply of Agricultural supplies for project Estoria</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/estonia/21.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-calendar-alt"></i>
                            <p>30-Jun-2022</p>
                        </div>
                        <div class="blog-text">
                            <h2>The aftermath of project Estoria</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

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