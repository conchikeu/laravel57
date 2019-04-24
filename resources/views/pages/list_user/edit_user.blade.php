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
    <link rel="stylesheet" href="{{asset("public/style2.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/responsive.css")}}">
</head>
<body>
	@extends('pages.list_user.header')
	@include('pages.list_user.menu')
	
		<div class="container" style="text-align: center">
			<div class="container">
     		 	<form action="{{Route('edit_user', $users->id)}}" method="POST">
			  @csrf
				<p>Name:</p><p><input type="text" name="name" size = "30px" value="{{ $users->name }}"></p>
				<p>Email:</p><p><input type="text" name="email" size = "30px" value="{{ $users->email }}"></p>
				<p>is_admin:</p><p><input type="increments" name="is_admin" size = "30px" value="{{ $users->is_admin }}"></p>
				<p>Password:</p><p><input type="password" name="password" size = "30px" value="{{ $users->password }}"></p>
				
				<p><input type="submit" name="add" value="Add user"></p>
 			@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
				</form>
			</div>
			
		</div>

    @include('pages.list_user.footer')


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
</body>
</html>