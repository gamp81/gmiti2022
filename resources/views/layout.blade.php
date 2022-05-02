<!doctype html>

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/gmiti.ico">
        <title>GMITI Soluciones</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet">
        <!--For Plugins external css-->
        <link rel="stylesheet" href="/css/plugins.css" />
        <link rel="stylesheet" href="/css/roboto-webfont.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="/css/style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="/css/responsive.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @yield('estilos')
        <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
      
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>+593 986536029</a>
                                <a href="#"><i class="fa fa-envelope"></i>contact@gmiti.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>
       
        <nav class="navbar navbar-default">

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="/images/tuerca1.png" alt="Logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about">Nosotros</a></li>
                        <li><a href="/servicios">Servicios</a></li>
                        
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contactanos">Contacto</a></li>
                        <!-- <li class="login"><a href="#">Sign In</a></li> -->
                        @guest
                        <li> <a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <!-- @if (Route::has('register'))
                                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif -->
                         @else
                         <li> <a class="no-underline hover:underline" href="/favorites">Favorites</a></li>


                         <!-- <li>{{ Auth::user()->name }}</li> -->

                        <li><a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        

       @yield('content')

       <a href="https://wa.me/593986536029?text=Me%20gustaría%20saber%información%20sobre%20" class="whatsapp" target="_blank"> 
       <i class="fab fa-whatsapp whatsapp-icon"></i></a>
       <!--Footer-->
        <footer id="footer" class="footer">
        <br><br>
        <div id="fh5co-footer" role="contentinfo" data-section="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 to-animate">
                        <h3 class="section-title">Acerca de nosotros</h3>
                        <p>Somos una empresa muy comprometida con nuestros clientes, nuestra misión es crear herramientas tecnológicas que fortalezcan el negocio y agiliten los procesos complejos de nuestros clientes</p>
                    </div>

                    <div class="col-md-6 to-animate">
                        <h3 class="section-title">Nuestra Dirección</h3>
                        <ul class="contact-info">
                            <li><i class="fas fa-map-marker-alt"></i> Cdla.Villaflora, Machala EC070104</li>
                            <li><i class="fas fa-phone-volume"></i> + 00593 986536029</li>
                            <li><i class="far fa-envelope"></i><a href="#"> contact@gmiti.com</a></li>
                            <li><i class="fas fa-globe"></i><a href="www.gmiti.com"> www.gmiti.com</a></li>
                        </ul>
                        <h3 class="section-title">Conecta con nosotros</h3>
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/syslabec" class="facebook"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/syslabec/" class="twitter"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.instagram.com/syslabec/" class="github"><i class="fab fa-instagram"></i></a></li> 
                        </ul>
                    </div>
                                    
                </div>
            </div>
	    </div>
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="/images/tuerca1.png" alt="logo" />
                            </div>
                        </div> -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p> by GMITI.COM 2020. All rights reserved.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
		
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>

        <script src="/js/plugins.js"></script>
        <script src="/js/modernizr.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>


