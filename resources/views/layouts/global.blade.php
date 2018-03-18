<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Xtreme Travel a Travel Agency Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Xtreme Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- js -->
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- //js -->
    <!--FlexSlider-->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!--End-slider-script-->
    <!-- pop-up-script -->
    <script src="{{ asset('js/jquery.chocolat.js') }}"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.view-seventh a').Chocolat();
        });
    </script>
    <!-- //pop-up-script -->
    <script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <!-- start-smoth-scrolling -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
    <style>
        .fix-padding {
            border-radius: 3px;
            padding-left: 20px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{ asset('js/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
    @stack('css')
</head>

<body>
@if(Route::currentRouteName() == 'welcome')
    @include('components.banner-home')
@else
    @include('components.banner')
@endif
@yield('content')
@include('components.footer')
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
@stack('js')
</body>
</html>