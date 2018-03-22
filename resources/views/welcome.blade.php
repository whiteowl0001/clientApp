<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Selecao one page site template with bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/bootstrap-responsive.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/prettyPhoto.css') !!}" rel="stylesheet">
  <link href="font/stylesheet.css" rel="stylesheet">
  <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/flexslider.css') !!}" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="css/sequencejs.css">
  <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="ico/favicon.ico">

  <!-- =======================================================
    Theme Name: Selecao
    Theme URL: https://bootstrapmade.com/selecao-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>

    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
      <div class="navbar-inner">
        <div class="container">
          <div class="logo">
            <a class="brand" href="index.html"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="navigation">
            <nav>
              <ul class="nav pull-right">
                <li class="current"><a href="#featured">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#contact">Contact</a></li>
                <li >
                      @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/home') }}">Home</a>
                      @else
                          <a href="{{ route('login') }}">Login</a>
                          <a href="{{ route('register') }}">Register</a>
                      @endauth
                  </div>
                       @endif
                </li>
              </ul>
            </nav>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <!-- end top -->
  </header>

  <!-- section featured -->
  <section id="featured">

    <!-- sequence slider -->
    <div id="sequence-theme">
      <img class="prev" src="img/bt-prev.png" alt="Previous">
      <img class="next" src="img/bt-next.png" alt="Next">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div id="sequence">
              <ul>
                <li class="animate-in">
                  <div class="info letter-container">
                    <h2 class="fade">Hiya I am selecao</h2>
                  </div>
                  <h4 class="subtitle">Mei ea persius alienum errem audiam eum id impetus bonorum</h4>
                  <div class="bottomup">
                    <img src="img/slider/parallax/img-1.png" alt="">
                  </div>
                </li>
                <li class="animate-in">
                  <div class="info letter-container">
                    <h2 class="fade">We creates unique website</h2>
                  </div>
                  <h4 class="subtitle">Lorem ipsum dolor sit amet viris torquatos ad vis invidunt singulis</h4>
                  <div class="lefttop">
                    <img src="img/slider/parallax/img-2.png" alt="">
                  </div>
                </li>
                <li class="animate-in">
                  <div class="info letter-container">
                    <h2 class="fade">With latest technology</h2>
                  </div>
                  <h4 class="subtitle">His at quod impedit eu zril quando perfecto mel sed eu eros debet.</h4>
                  <div class="righttop">
                    <img src="img/slider/parallax/img-3.png" alt="">
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end sequence slider -->
  </section>
  <!-- end featured -->

  <!-- Section about -->
  <section id="about" class="section">
    <div class="gray-shadow">
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>About our company</span></h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="section-intro">
            <p>
              Congue assentior eu vix. Iusto voluptaria vis te. Eos ea quot qualisque, usu an doming graeco vocent. Ei vocent patrioque pri, mea cu soluta accusam platonem. His mentitum laboramus definitionem in.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span6">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slider/flexslider/img-1.png" alt="">
              </li>
              <li>
                <img src="img/slider/flexslider/img-2.png" alt="">
              </li>
              <li>
                <img src="img/slider/flexslider/img-3.png" alt="">
              </li>
            </ul>
          </div>
        </div>
        <div class="span6">
          <h3>who we are</h3>
          <p>
            Qui te reprimique scripserit, et zril ornatus duo, mei te habemus fastidii interpretaris. Mel eu vide pericula, te ius sint concludaturque. No quo tale vocibus. In nemore denique disputationi sea. Eu vel omnes semper temporibus, at inani impedit phaedrum
            nec. Id quis deseruisse mea, facete noluisse usu ne, ei putent eleifend mel.
            <p>
              <div class="dotted_line"></div>
              <h4>Expertise areas</h4>
              <label>Web design:</label>
              <div class="progress progress-striped progress-info active">
                <div class="bar bar80">
                </div>
              </div>
              <label>Wordpress :</label>
              <div class="progress progress-striped progress-warning active">
                <div class="bar bar60">
                </div>
              </div>
              <label>Photoshop :</label>
              <div class="progress progress-striped progress-danger active">
                <div class="bar bar40">
                </div>
              </div>
              <label>Ilustrator :</label>
              <div class="progress progress-striped progress-success active">
                <div class="bar bar20">
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section about -->

  <!-- section services -->
  <section id="services" class="section parallax">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>Selecao services</span></h3>
          </div>
        </div>
        <div class="span12">
          <div class="section-intro">
            <p>
              Qui te reprimique scripserit, et zril ornatus duo, mei te habemus fastidii interpretaris. Mel eu vide pericula, te ius sint concludaturque. No quo tale vocibus.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled active icon-48 icon-group"></i>
            <h3> UI design</h3>
            <p>
              Lorem ipsum dolor sit amet, eum no latine delectus deserunt diam
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled icon-48 icon-thumbs-up"></i>
            <h3>Brand indentity</h3>
            <p>
              Lorem ipsum dolor sit amet, eum no latine delectus deserunt diam
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled icon-48 icon-beaker"></i>
            <h3>Web application</h3>
            <p>
              Lorem ipsum dolor sit amet, eum no latine delectus deserunt diam
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well box aligncenter">
            <i class="icon-circled icon-48 icon-twitter"></i>
            <h3>Social media</h3>
            <p>
              Lorem ipsum dolor sit amet, eum no latine delectus deserunt diam
            </p>
            <a href="#" class="btn btn-color">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section services -->

  <!-- section works -->
  <section id="works" class="section gray-bg">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>What we've done</span></h3>
          </div>
        </div>
        <div class="span12">
          <div class="section-intro">
            <p>
              Congue assentior eu vix. Iusto voluptaria vis te. Eos ea quot qualisque, usu an doming graeco vocent.
            </p>
          </div>
        </div>
        <div class="span12">
          <ul class="filter">
            <li class="all active"><a href="#" class="btn btn-color">All categories</a></li>
            <li class="web"><a href="#" class="btn btn-color">Web design</a></li>
            <li class="brand"><a href="#" class="btn btn-color">Brand identity</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
            <li class="photo"><a href="#" class="btn btn-color">Photography</a></li>
            <li class="ilustrator"><a href="#" class="btn btn-color">Ilustrator</a></li>
          </ul>
          <div class="row">
            <ul class="portfolio-area">
              <li class="portfolio-item2" data-id="id-0" data-type="web">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img1.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="brand">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img2.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="web">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img3.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="graphic">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img4.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="ilustrator">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img5.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="brand">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img6.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="photo">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img7.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="photo">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img8.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="brand">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img9.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="photo">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img10.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="graphic">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img11.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
              <li class="portfolio-item2" data-id="id-0" data-type="brand">
                <div class="thumb-wrapp">
                  <img src="img/portfolio/img12.jpg" class="folio-image" alt="">
                  <div class="folio-caption">
                    <h5>Portfolio name</h5>
                    <span class="folio-link">
									<a href="img/portfolio/big.jpg" data-pretty="prettyPhoto" title="zoom">
									<i class="icon-rounded  icon-32 icon-zoom-in"></i></a>
									<a href="#"><i class="icon-rounded  icon-32 icon-link"></i></a>
									</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section works -->

  <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>Get in touch with us</span></h3>
          </div>
        </div>
        <div class="span12">
          <div class="section-intro">
            <p>
              Qui te reprimique scripserit, et zril ornatus duo, mei te habemus fastidii interpretaris. Mel eu vide pericula, te ius sint concludaturque. No quo tale vocibus.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span6">
          <h4><i class="icon-circled icon-32 icon-envelope"></i> Contact form</h4>

          <!-- start contact form -->
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <ul class="contact-list">
              <li class="form-group">
                <input type="text" name="name" class="form_input" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
                <li class="form-group">
                  <input type="email" class="form_input" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validation"></div>
                </li>
                <li class="form-group">
                  <input type="text" class="form_input" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <div class="validation"></div>
                </li>

                <li class="form-group">
                  <textarea class="form_textarea" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </li>
                <li class="last">
                  <button class="btn btn-large btn-theme" type="submit" id="send">Send a message</button>
                </li>
            </ul>
          </form>
          <!-- end contact form -->

        </div>
        <div class="span6">
          <h4><i class="icon-circled icon-32 icon-user"></i> Get in touch with us</h4>
          <p>
            Feel free to ask if you have any question regarding our services or if you just want to say Hello, we would love to hear from you.
          </p>
          <div class="dotted_line">
          </div>
          <p>
            <span><i class="icon-phone"></i> <strong>Phone:</strong> +6221 213 22 21 or +6221 213 22 22</span>
          </p>
          <p>
            <span><i class="icon-comment"></i> <strong>Skype:</strong> hello.selectro</span>
          </p>
          <p>
            <span><i class="icon-envelope-alt"></i> <strong>Email:</strong> info@yourdomain.com</span>
          </p>
          <div class="map-container">
            <div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section contact -->


  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div class="logo">
                <a class="brand" href="index.html">
								<img src="img/logo.png" alt="">
							</a>
              </div>
              <p>Lorem ipsum dolor sit amet, solet saepe vim an, te vim facer facilis docendi</p>
              <div class="social-links">
                <ul class="social-links">
                  <li><a href="#" title="Twitter"><i class="icon-circled icon-64 icon-twitter"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="icon-circled icon-64 icon-facebook"></i></a></li>
                  <li><a href="#" title="Google plus"><i class="icon-circled icon-64 icon-google-plus"></i></a></li>
                  <li><a href="#" title="Linkedin"><i class="icon-circled icon-64 icon-linkedin"></i></a></li>
                  <li><a href="#" title="Pinterest"><i class="icon-circled icon-64 icon-pinterest"></i></a></li>
                </ul>

              </div>

              <p>
                &copy; Selecao - All right reserved
              </p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Selecao
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Javascript Library Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/parallax/jquery.parallax-1.1.3.js"></script>
  <script src="js/nagging-menu.js"></script>
  <script src="js/sequence.jquery-min.js"></script>
  <script src="js/sequencejs-options.sliding-horizontal-parallax.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
  <script src="js/prettyPhoto/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>

</body>

</html>

