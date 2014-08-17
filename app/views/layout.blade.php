<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Sweet Broadband UK - Compare Broadband, Phone & TV Packages</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Best Broadband Deals - Compare Broadband, Phone & TV Packages, plus the UK's best business broadband deals" name="description">
  <meta content="" name="keywords">
  <meta content="sweetbroadband" name="author">

  <meta property="og:site_name" content="Sweet Broadband UK">
  <meta property="og:title" content="Sweet Broadband UK - Compare Broadband, Phone & TV Packages">
  <meta property="og:description" content="Best Broadband Deals - Compare Broadband, Phone & TV Packages, plus the UK's best business broadband deals">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="{{ URL::current() }}">

  <link rel="shortcut icon" href="favicon.ico">
  <link href="{{ URL::asset('favicon.ico') }}" rel="SHORTCUT ICON" type="image/ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{ URL::asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{ URL::asset('plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">              
  <link href="{{ URL::asset('plugins/bxslider/jquery.bxslider.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('plugins/layerslider/css/layerslider.css') }}" type="text/css">
    <!-- Page level stuff for pages that aren't the homepage -->
    <link href="{{ URL::asset('plugins/rateit/src/rateit.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{ URL::asset('css/style-metronic.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet" type="text/css">  
  <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body>
    <!-- BEGIN HEADER -->
    <div role="navigation" class="navbar header no-margin">
        <div class="container">
        
            <div class="navbar-header">
              <!-- BEGIN RESPONSIVE MENU TOGGLER -->
              <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <!-- END RESPONSIVE MENU TOGGLER -->
              <a href="{{ URL::to('/') }}" class="navbar-brand"><img src="{{ URL::asset('img/logo.png') }}" alt="Sweet Broadband UK"></a><!-- LOGO -->
          </div>

          <!-- BEGIN NAVIGATION -->
          <div class="collapse navbar-collapse mega-menu">
              <ul class="nav navbar-nav">
                  {{ HTML::nav_link('broadband', 'Broadband') }}
                  {{ HTML::nav_link('phone-and-broadband', 'Phone &amp; Broadband') }}
                  {{ HTML::nav_link('TV-and-broadband', 'TV &amp; Broadband') }}
                  {{ HTML::nav_link('business-broadband', 'Business Broadband') }}
                  {{ HTML::nav_link('mobile-phone', 'Mobile Phone') }}         
                  <!-- END TOP SEARCH -->
              </ul>
          </div>
          <!-- END NAVIGATION -->

        </div>
    </div>
    <!-- END HEADER -->

    @yield('content')

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
            <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Information</h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="#">Delivery Information</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Customer Service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Order Tracking</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Shipping & Returns</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Careers</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Payment Methods</a></li>
            </ul>
          </div>
          <!-- END INFO BLOCK -->
          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Latest Tweets</h2>
            <dl class="dl-horizontal f-twitter">
              <dt><i class="fa fa-twitter"></i></dt>
              <dd>
                <a href="#">@keenthemes</a>
                Imperdiet condimentum diam dolor lorem sit consectetur adipiscing
                <span>3 min ago</span>
              </dd>
            </dl>                    
            <dl class="dl-horizontal f-twitter">
              <dt><i class="fa fa-twitter"></i></dt>
              <dd>
                <a href="#">@keenthemes</a>
                Imperdiet condimentum diam dolor lorem sit consectetur adipiscing
                <span>3 min ago</span>
              </dd>
            </dl> 
            <dl class="dl-horizontal f-twitter">
              <dt><i class="fa fa-twitter"></i></dt>
              <dd>
                <a href="#">@keenthemes</a>
                Imperdiet condimentum diam dolor lorem sit consectetur adipiscing
                <span>3 min ago</span>
              </dd>
            </dl>           
          </div>
          <!-- END TWITTER BLOCK -->
          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              Skype: <a href="skype:metronic">metronic</a>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
        <div class="row">
          <!-- BEGIN SOCIAL ICONS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-icons">
              <li><a class="rss" data-original-title="rss" href="#"></a></li>
              <li><a class="facebook" data-original-title="facebook" href="#"></a></li>
              <li><a class="twitter" data-original-title="twitter" href="#"></a></li>
              <li><a class="googleplus" data-original-title="googleplus" href="#"></a></li>
              <li><a class="linkedin" data-original-title="linkedin" href="#"></a></li>
              <li><a class="youtube" data-original-title="youtube" href="#"></a></li>
              <li><a class="vimeo" data-original-title="vimeo" href="#"></a></li>
              <li><a class="skype" data-original-title="skype" href="#"></a></li>
            </ul>
          </div>
          <!-- END SOCIAL ICONS -->
          <!-- BEGIN NEWLETTER -->
          <div class="col-md-6 col-sm-6">
            <div class="pre-footer-subscribe-box pull-right">
              <h2>Newsletter</h2>
              <form action="{{ URL::to('subscribe') }}">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control" name="email">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div> 
          </div>
          <!-- END NEWLETTER -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer padding-top-15">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © Metronic Shop UI. ALL Rights Reserved. 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="list-unstyled list-inline pull-right margin-bottom-15">
              <li><img src="{{ URL::asset('img/payments/western-union.jpg') }}" alt="We accept Western Union" title="We accept Western Union"></li>
              <li><img src="{{ URL::asset('img/payments/american-express.jpg') }}" alt="We accept American Express" title="We accept American Express"></li>
              <li><img src="{{ URL::asset('img/payments/MasterCard.jpg') }}" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="{{ URL::asset('img/payments/PayPal.jpg') }}" alt="We accept PayPal" title="We accept PayPal"></li>
              <li><img src="{{ URL::asset('img/payments/visa.jpg') }}" alt="We accept Visa" title="We accept Visa"></li>
            </ul>
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="{{ URL::asset('temp/products/model7.jpg') }}" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="#" class="active"><img alt="Berry Lace Dress" src="{{ URL::asset('temp/products/model3.jpg') }}"></a>
                    <a href="#"><img alt="Berry Lace Dress" src="{{ URL::asset('temp/products/model4.jpg') }}"></a>
                    <a href="#"><img alt="Berry Lace Dress" src="{{ URL::asset('temp/products/model5.jpg') }}"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h1>Cool green dress with red bell</h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat 
Nostrud duis molestie at dolore.</p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <button class="btn btn-default" type="submit">More details</button>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('plugins/respond.min.js') }}"></script>  
    <![endif]-->  
    <script src="{{ URL::asset('plugins/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>      
    <script type="text/javascript" src="{{ URL::asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('plugins/jQuery-slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="{{ URL::asset('plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script><!-- pop up -->
    <script type="text/javascript" src="{{ URL::asset('plugins/bxslider/jquery.bxslider.min.js') }}"></script><!-- slider for products -->
    <script type="text/javascript" src='{{ URL::asset('plugins/zoom/jquery.zoom.min.js') }}'></script><!-- product zoom -->
    <script src="{{ URL::asset('plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript"></script><!-- Quantity -->

    <!-- BEGIN LayerSlider -->
    <script src="{{ URL::asset('plugins/layerslider/jQuery/jquery-easing-1.3.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('plugins/layerslider/jQuery/jquery-transit-modified.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('plugins/layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('plugins/layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script type="text/javascript" src="{{ URL::asset('scripts/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('scripts/index.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initLayerSlider();
            App.initImageZoom();
            App.initTouchspin();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>