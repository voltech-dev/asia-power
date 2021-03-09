<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ERP') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

      <!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('/plugins/fontawesome/css/all.min.css')}}">
		
		
		<!-- Main CSS -->		
		<link rel="stylesheet" href="{{asset('/css/style.css')}}">
		
		 <!-- Scripts -->
		<script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>	
    </head>
    <body>
    <div class="main-wrapper login-body">
		<div class="login-wrapper">
		<div class="container">
            {{ $slot }}
        	</div>
        </div>
		</div>
        @stack('scripts')
    </body>
</html>
