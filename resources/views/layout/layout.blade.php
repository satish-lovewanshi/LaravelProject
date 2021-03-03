<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Alpha World</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" />
    <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="{{ asset('css/all.min.css')}}" rel="stylesheet" />
    <!-- https://fontawesome.com/ -->
    <link href="{{ asset('slick/slick.css')}}" rel="stylesheet" />
    <!-- https://kenwheeler.github.io/slick/ -->
    <link href="{{ asset('slick/slick-theme.css')}}" rel="stylesheet" />
    <link href="{{('css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- https://getbootstrap.com -->
    <link href="{{asset('css/templatemo-new-vision.css')}}" rel="stylesheet" />
    
<style type='text/css'>
    .f-active{
        color:#000;
        border-bottom:5px solid #09f;
        border-left:none;
    }
    .tm-main-bg {
    /* background-image: url(@yield("banner"));  */
    background-repeat: no-repeat;
    background-position: 45% top;
    height: 800px;
    min-height: 500px;
    margin-left: -40px;
    margin-right: -40px;
    /* vertical-align: middle;
    border-style: none; */
    width:1200px; 
}
</style>
</head>

<body>
    <!-- Page Header -->
    <div class="container-fluid">
        @include('layout.header')
        @yield('content')

    </div>

    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('slick/slick.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/templatemo-script.js')}}"></script>
    <script>
        jQuery(document).ready(function(){
            var pgurl = window.location.href;
            jQuery(".navbar-collapse ul li a").each(function(){
            if(jQuery(this).attr("href")==pgurl){
                jQuery(this).addClass('f-active');
            }
            });
        });
    </script>
    @stack('footer-scripts')
</body>

</html>