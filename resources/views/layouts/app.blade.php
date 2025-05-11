<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Favicon -->
        <link rel="icon" href="/images/logo2025-sf.ico" type="image/png">
        {{-- <link rel="shortcut icon" href="images/gmiti.ico"> --}}
        <title>GMITI Soluciones Informaticas</title>
        <meta name="language" content="spanish">
        <meta name="copyright" content="GMITI">
        <meta name="author" content="Moncada G">
        <meta name="audience" content="all">
        <meta name="description" content="Blog Informatico, Soluciones informaticas, sistema de facturacion , sistema de laboratorios clinicos">
        <meta name="robots" content="index,all,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 ">
        
        
    <!--     {{-- <link rel="apple-touch-icon" href="apple-touch-icon.png">  --}} -->
     <!--    <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <!--     {{-- <link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet">  --}} -->
        <!--For Plugins external css-->
        <!-- <link rel="stylesheet" href="/css/plugins.css" />
        <link rel="stylesheet" href="/css/roboto-webfont.css" /> -->
        <!--Theme custom css -->
      {{--   <link rel="stylesheet" href="/css/estilos.css"> --}}
       <!--  <link rel="stylesheet" href="/css/style.css"> -->
        <!--Theme Responsive css-->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
       <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     <!--    @yield('estilos') -->
       <!--  <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- Scripts -->
   <!--  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}} -->
    <!-- <script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script> -->
    {{-- CKEditor CDN --}}
     <!--    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script> -->
    <!-- Styles -->
   
    
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
    <header class="bg-gray-800 py-6">
           
           <div class="container mx-auto flex justify-between items-center px-6">
               <div>
                   <a href="{{ url('/') }}" class="flex items-center gap-2 text-lg font-semibold text-gray-100 no-underline">
                        <img src="/images/logo2025-sf.png" alt="work" style="filter: invert(100%);"/>
                        <i class="fas icon-lg" style=" font-size: 40px;" >
                        GMITI
                        </i>
                        Services
                    </a>
               </div>
                 {{-- <div class="nav-links" style=" font-size: 40px;"><img src="/images/logo2025.png" class="w-full h-full object-cover" /> GMITI</div> Services    --}}
                    
               <nav class="space-x-4 text-gray-300 text-lg text-2xl">
               <button class="menu-toggle" id="menu-toggle">&#9776;</button>
                <ul class="nav-links" id="nav-links">
                   <li><a class="no-underline hover:underline" href="/">Inicio</a></li>
                   <li><a class="no-underline hover:underline" href="/servicios">Servicios</a></li>
                   <li><a class="no-underline hover:underline" href="/productos">Productos</a></li>
                   <li><a class="no-underline hover:underline" href="/about">Nosotros</a></li>
                   <li><a class="no-underline hover:underline" href="/en/blog">Blog</a></li>
                   @guest
                        <li><a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                       <!-- @if (Route::has('register'))
                           <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                       @endif -->
                   @else
                      <li> <a class="no-underline hover:underline" href="/favorites">Favorites</a></li>


                      <li><a class="no-underline hover:underline" href="/blog_admin"><span>{{ Auth::user()->name }}</span></a></li>

                      <li><a href="{{ route('logout') }}"
                          class="no-underline hover:underline"
                          onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                           {{ csrf_field() }}
                       </form>
                   @endguest
                   </ul>
               </nav>
           </div>
       </header>
        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
    <script src="/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        @yield('javascript')
        <script src="/js/plugins.js"></script>
        <script src="/js/modernizr.js"></script>
        <script src="/js/main.js"></script>
        <script>
            document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('nav-links').classList.toggle('active');
            });
        </script>
</body>
</html>