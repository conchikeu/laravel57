<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Van Vu Store</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="short icon" type="image/x-icon" href="{{asset('public/img/title-logo.png')}}">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    {{--<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href="../../../public/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset("public/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("public/css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("public/style.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/responsive.css")}}">
</head>
<body>
    @include('pages.list_user.header')

    @include('pages.list_user.menu')

    @include('pages.list_user.footer')

    <!-- @include('newpages-vanvu.footer') -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.sticky.js')}}"></script>
    <!-- jQuery easing -->
    <script src="{{asset('public/js/jquery.easing.1.3.min.js')}}"></script>
    <script src="{{asset('public/js/main.js')}}"></script>
    <!-- Slider -->
    <script type="text/javascript" src="{{asset('public/js/bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/script.slider.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
       var myIndex = 0;
        carousel();

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function currentDiv(n) {
          showDivs(slideIndex = n);
        }


        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-red", "");
          }
          x[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " w3-red";
        }
    </script>
</body>
</html>