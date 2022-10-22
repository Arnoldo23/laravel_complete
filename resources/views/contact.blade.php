<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Incredible Youth International | Contact Us</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/">
    
	  <noscript><link rel="stylesheet" href="assets/css/fontawesome-all.min.css" /></noscript>
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
        <ul>
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
            <h2 class="text-xl">Contact Us</h2>
            <p class="text-md">
              <i>Incredible Youth International strives to make ends meet for the youth who go through this daily life with various challenges
                and help teach them what they need to know inorder to survive in the real world setting. We believe that the quality of a country 
                resides in the quality of its youth since they are the future leaders of this generation. 
              </i><br>
            </p>
          </div>
        </section>

      <!-- Box B -->

      <section class="box box-b bg-dark grid-col-2">
        <img src="img/iyi/77.jpg" alt="" />
        <img src="img/iyi/7.jpg" alt="" />
      </section>

    <!-- Box C -->
						<section id="footer">
              <div class="inner">
                <h2 class="major">Get in touch</h2>
                <p>In order to support our goals and objectives to help the youth, we would be open to donations and any other forms of feedback that would help improve our organization to it's fullest potential</p>
            
                    <!-- Success message -->
                    @if(Session::has('success'))
                      <div class="alert alert-success">
                        {{Session::get('success')}}
                      </div>
                    @endif    
                    <form class="col-md-9 m-auto" method="post" role="form" action="{{ route('contact.store') }}">
                      @csrf
                      <div class="fields">
                        <div class="field">
                          <label for="name">Name</label>
                          <input type="text" class="form-control mt-1 {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" />
                          <!-- Error -->
                          @if ($errors->has('name'))
                            <div class="error">
                              {{ $errors->first('name') }}
                            </div>
                          @endif
                        </div>
                        <div class="field">
                          <label for="email">Email</label>
                          <input type="email" class="form-control mt-1 {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" />
                          <!-- Error -->
                          @if ($errors->has('email'))
                              <div class="error">
                                  {{ $errors->first('email') }}
                              </div>
                          @endif
                        </div>
                        <div class="field">
                          <label for="inputphone">Phone</label>
                          <input type="text" class="form-control mt-1 {{ $errors->has('phone') ? 'error' : '' }}" id="phone" name="phone" placeholder="Phone">
                          <!-- Error -->
                          @if ($errors->has('phone'))
                              <div class="error">
                                  {{ $errors->first('phone') }}
                              </div>
                          @endif
                        </div>
                        <div class="field">
                          <label for="inputsubject">Subject</label>
                          <input type="text" class="form-control mt-1 {{ $errors->has('subject') ? 'error' : '' }}" id="subject" name="subject" placeholder="Subject">
                          <!-- Error -->
                          @if ($errors->has('subject'))
                              <div class="error">
                                  {{ $errors->first('subject') }}
                              </div>
                          @endif
                        </div>
                        <div class="field">
                          <label for="message">Message</label>
                          <textarea name="message" class="form-control mt-1 {{ $errors->has('message') ? 'error' : '' }}" id="message" rows="4"></textarea>
                          <!-- Error -->
                          @if ($errors->has('message'))
                              <div class="error">
                                  {{ $errors->first('message') }}
                              </div>
                          @endif
                        </div>
                      </div>  
                      
                      <ul class="actions">
                        <li><button type="submit" name="send" value="Send Message" class="btn btn-success btn-lg px-3">Send Message</button></li>
                      </ul>
                    </form>
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

    <!-- Start script -->
    <script src="script.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.parallax.js"></script>

    <!-- End script -->

</body>  
</html>