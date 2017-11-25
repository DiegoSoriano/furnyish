<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Furnyish Store') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <link href="{{ URL::asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="{{ URL::asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Styles -->
   
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
    <!-- start menu -->
    <link href="{{ URL::asset('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::asset('css/form.css') }}" rel='stylesheet' type='text/css' />
    <!--etalage-->
    <link rel="stylesheet" href="{{ URL::asset('css/etalage.css') }}" type='text/css' >
    <!-- //etalage-->
    {{-- Font Awesome --}}
    <script src="https://use.fontawesome.com/b2ad97edc3.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('stripe')

</head>

<body>

<div id="app">
    <!-- header -->
    @include ('layouts.header')

    @yield('content')

    <!-- footer -->
    @include ('layouts.footer')

    

    <!-- jQuery (necessary JavaScript plugins) -->
    
    
    
    </div>
<!---->
<script type='text/javascript' src="{{ URL::asset('js/jquery-1.11.1.min.js') }}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script type="text/javascript" src="{{ URL::asset('js/megamenu.js') }}"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="{{ URL::asset('js/menu_jquery.js') }}"></script>
    <script src="{{ URL::asset('js/simpleCart.min.js') }}"> </script>
    <script src="{{ URL::asset('js/responsiveslides.min.js')  }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
        // Slideshow 1
        $("#slider1").responsiveSlides({
         auto: true,
         nav: true,
         speed: 500,
         namespace: "callbacks",
        });
        });
    </script>
    <script src="{{ URL::asset('js/jquery.etalage.min.js') }}"></script>

    <script>
      jQuery(document).ready(function($){

        $('#etalage').etalage({
          thumb_image_width: 300,
          thumb_image_height: 400,
          source_image_width: 900,
          source_image_height: 1200,
          show_hint: true,
          click_callback: function(image_anchor, instance_id){
            alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
          }
        });

      });
    </script>
    @yield('scripts')
</body>
</html>