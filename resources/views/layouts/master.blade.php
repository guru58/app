<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width = device-width , initial-scale = 1.0" />
    <link rel="stylesheet" href="/fonts/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    
    @include('includes.header')
    
    <div class="main">
                                            {{-- HOME PAGE --}}
                     
      @yield('home')
      @yield('owl_carousel')

                                            {{-- SINGLE POST PAGE --}}

      @yield('singlepost')
      @yield('jquery_TE_CSS')

                                            {{-- PROFILE PAGE START --}}
      
      @yield('profile')

                                             {{-- UPDATE PROFILE PAGE START --}}
      
      @yield('updateprofile')

    </div>
    
    @include('includes.footer')
  
  </body>
  
                                                                {{-- SCRIPT START HERE --}}

  <script type="text/javascript" src="js/app.js"></script>
  @yield('owl_js')
  @yield('jquery_TE_JS')


</html>
