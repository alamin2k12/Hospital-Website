<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Rida Hospital</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
{!!Html::style('biotex/css/bootstrap.min.css')!!} 
{!!Html::style('biotex/simple-line-icons/css/simple-line-icons.css')!!}
{!!Html::style('biotex/css/fancybox/jquery.fancybox.css')!!}
{!!Html::style('biotex/css/flexslider.css')!!}
{!!Html::style('biotex/css/style.css')!!}
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
	<!-- start header -->
	<header>
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"> {{ HTML::image('biotex/img/logo.png') }} </a>
                    
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
		
		
<div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                    <a class="navbar-brand" href="index.html">{{ HTML::image('biotex/img/logo.png') }} </a>
                            
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
						
						  <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li> 
						<li><a href="about.html">About Us</a></li> 
						  <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="services.html">IT Services</a></li>
                                            <li><a href="#">Consultancy</a></li>
                                            <li><a href="#">Mobile Dev</a></li>
                                        </ul>
                                    </li>
									
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
					
                            
                                    
                            </ul> 
                        </div>
                    </div>
                </nav>
            </div>
        </div>
		
	</header>
    @yield('content');
        <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Our Contact</h5>
                    <address>
                    <strong>BioTex company Inc</strong><br>
                    JC Main Road, Near Silnile tower<br>
                     Pin-21542 NewYork US.</address>
                    <p>
                        <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                        <i class="icon-envelope-alt"></i> email@domainname.com
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Quick Links</h5>
                    <ul class="link-list">
                        <li><a href="#">Latest Events</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Latest posts</h5>
                    <ul class="link-list">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Recent News</h5>
                    <ul class="link-list">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                        <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; BioTex 2018 All right reserved. By </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!!Html::script('biotex/js/jquery.js')!!}
{!!Html::script('biotex/js/jquery.easing.1.3.js')!!}
{!!Html::script('biotex/js/bootstrap.min.js')!!}
{!!Html::script('biotex/js/jquery.fancybox.pack.js')!!}
{!!Html::script('biotex/js/jquery.fancybox-media.js')!!}
{!!Html::script('biotex/js/portfolio/jquery.quicksand.js')!!}
{!!Html::script('biotex/js/portfolio/setting.js')!!}
{!!Html::script('biotex/js/jquery.flexslider.js')!!}
{!!Html::script('biotex/js/animate.js')!!}
{!!Html::script('biotex/js/custom.js')!!}
</body>
</html>