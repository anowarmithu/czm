<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>@yield('title')</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="{{ asset('image/png') }}" href="{{ asset('images/logos/fav.png') }}">
 
  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css') }}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
               
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Dhaka, Bangladesh </p> 
                            {{-- @php
                                $dt = new DateTime();
                            echo $dt->format('d-M-Y');
                            @endphp --}}
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">

                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="tel:+8802222298255">
                          <span class="social-icon"><i class="fas fa-phone-alt" ></i></span>
                      </a>
                      <a title="Facebook" href="mailto:info@czm-bd.org">
                        <span class="social-icon"><i class="far fa-envelope"></i></span>
                    </a>
                    <a title="Facebook" href="https://facebbok.com/">
                        <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                    </a>
                      <a title="Twitter" href="https://twitter.com/">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/">
                        <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                    </a>
                      <a title="Linkdin" href="https://github.com/">
                          <span class="social-icon"><i class="fab fa-youtube"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                
                <div class="logo">
                    <a class="d-block" href="/">
                      <img loading="lazy" src="{{ asset('images/logos/logo.png') }}" alt="Constra">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">

                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                      <li class="nav-item dropdown active">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="/about/czm">About CZM</a></li>
                            <li><a href="/about/governence">CZM Governence</a></li>
                            <li><a href="/about/accountability">CZM Accountability</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Zakat <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="/zakat/quran">Zakat in the Al-Quran</a></li>
                            <li><a href="/zakat/hadiths">Zakat In the Hadiths</a></li>
                            <li><a href="/zakat/blogs">Zakat Blogs & Articales</a></li>
                            <li><a href="/zakat/faq">Zakat FAQ</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Programs <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="/programs/insaniat">Insaniat - Emergency Support</a></li>
                            <li><a href="/programs/jeebika">Jeebika - Livlihood Development</a></li>
                            <li><a href="/programs/mudareeb">Mudareeb - Enterprise Development</a></li>
                            <li><a href="/programs/naipunnabikash">Naipunna Bikash - Vocational Training</a></li>
                            <li><a href="/programs/gulbagicha">Gulbagicha - Pre-Primary Education</a></li>
                            <li><a href="/programs/genius">Genius - Scholarship</a></li>
                            <li><a href="/programs/dawah">Dawah -Awarness Building</a></li>
                          </ul>
                      </li>

              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Publications <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="/publications/books">Books</a></li>
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Reports</a>
                                <ul class="dropdown-menu">
                                  <li><a href="/publications/reports/audit">Audit Reports</a></li>
                                  <li><a href="/publications/reports/annual">Annual Reports</a></li>
                                  <li><a href="/publications/reports/special">Special Reports</a></li>
                                  <li><a href="/publications/reports/newsletters">Newsletter</a></li>
                                </ul>
                            </li>
                          </ul>
                      </li>

                      <li class="nav-item"><a class="nav-link" href="/news">News</a></li>

                      <li class="nav-item"><a class="nav-link" href="/successStories">Success Stories</a></li>

                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Gallery<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="/gallery/image">Image Gallery</a></li>
                          <li><a href="/gallery/video">Video Gallery</a></li>
                        </ul>
                      </li>

                      <li class="nav-item"><a class="nav-link" href="/career/jobs">Career</a></li>
                      <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="/donation" style="color: #fff !important;">Donate</a>
                      </li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->



  @yield('content')


  <section class="subscribe no-padding">
    <div class="container">
      <div class="row">
          <div class="col-md-4">
            <div class="subscribe-call-to-acton">
                <h3>Wants more about CZM?</h3>
                <h4 ><a href="tel:+8802222298255">+88 02 2222 98255</a></h4>
            </div>
          </div><!-- Col end -->
  
          <div class="col-md-8">
            <div class="ts-newsletter row align-items-center">
                <div class="col-md-5 newsletter-introtext">
                  <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                  <p class="text-white">Latest updates and news</p>
                </div>
  
                <div class="col-md-7 newsletter-form">
                  <form action="#" method="post">
                      <div class="form-group">
                        <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                        <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                      </div>
                  </form>
                </div>
            </div><!-- Newsletter end -->
          </div><!-- Col end -->
  
      </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
  </section>
  <!--/ subscribe end -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-3 col-md-3 col-sm-6 footer-widget footer-about">
            <h3 class="widget-title">About CZM</h3>
            <img loading="lazy" height="65px" class="footer-logo" src="{{ asset('images/logos/logogray.png') }}" alt="Constra">
            <p>Center for Zakat Management (CZM) is a social enterprise, aiming to promote the obligation of zakat set by Allah as an economic tool for bringing prosperity to the needy.</p>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">About Zakat</h3>
            <ul class="list-arrow">
              <li><a href="service-single.html">Pre-Construction</a></li>
              <li><a href="service-single.html">General Contracting</a></li>
              <li><a href="service-single.html">Construction Management</a></li>
              <li><a href="service-single.html">Design and Build</a></li>
              <li><a href="service-single.html">Self-Perform Construction</a></li>
              <li><a href="service-single.html">Self-Perform Construction</a></li>
            </ul>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Programs</h3>
            <ul class="list-arrow">
              <li><a href="service-single.html">Pre-Construction</a></li>
              <li><a href="service-single.html">General Contracting</a></li>
              <li><a href="service-single.html">Construction Management</a></li>
              <li><a href="service-single.html">Design and Build</a></li>
              <li><a href="service-single.html">Self-Perform Construction</a></li>
              <li><a href="service-single.html">Self-Perform Construction</a></li>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Contact Us</h3>
            <div class="working-hours">
                <p class="info-text">House # 26, Road # 07, Block - C <br> Niketan, Gulshan-1, Dhaka-1212</p>
                <p class="info-box-subtitle"><a href="tel:+8802222298255">Phone: +88 02 2222 98255</a></p>
                <p class="info-box-subtitle"><a href="mailto:info@czm-bd.org">Email: info@czm-bd.org</a></p>
            </div>
            <form class="form-inline">
                
                <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Subscribe Newsletters">
                </div>
              
                <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
              </form>
          </div><!-- Col end -->

        
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info text-center text-md-left">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script> <a href="https://czm-bd.org/">Center for Zakat Management (CZM)</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">Zakat</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Donate</a></li>
                <li>
                  <a title="login" href="/back/index">
                    <span class="social-icon"><i class="far fa-user"></i></span>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}" defer></script>
  <!-- Slick Carousel -->
  <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
  <!-- Color box -->
  <script src="{{ asset('plugins/colorbox/jquery.colorbox.js') }}"></script>
  <!-- shuffle -->
  <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="{{ asset('plugins/google-map/map.js') }}" defer></script>

  <!-- Template custom -->
  <script src="{{ asset('js/script.js') }}"></script>

  </div><!-- Body inner end -->
  </body>

  </html>