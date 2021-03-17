<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ERP') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">



    <link rel="stylesheet" href="{{asset('/css/demo.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('/plugins/datatables/datatables.min.css')}}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap-datetimepicker.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="page-wrapper">
            <div class="content container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    @stack('scripts')
</body>
<!-- Scripts -->
<script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>  
		<script src="{{asset('/js/popper.min.js')}}"></script>
		<script src="{{asset('/js/bootstrap.min.js')}}"></script>		
		<!-- Feather Icon JS -->
		<script src="{{asset('/js/feather.min.js')}}"></script>	
		<!-- Slimscroll JS -->
		<script src="{{asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		<!-- Map JS -->
				<!-- Form Validation JS -->
        <script src="{{asset('/js/form-validation.js')}}"></script>
		<!-- Mask JS -->
		<script src="{{asset('/js/jquery.maskedinput.min.js')}}"></script>
        <script src="{{asset('/js/mask.js')}}"></script>
		<!-- Datatables JS -->
		<script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('/plugins/datatables/datatables.min.js')}}"></script>
		<!-- Select2 JS -->
		<script src="{{asset('/plugins/select2/js/select2.min.js')}}"></script>
		<!-- Datepicker Core JS -->
		<script src="{{asset('/plugins/moment/moment.min.js')}}"></script>
		<script src="{{asset('/js/bootstrap-datetimepicker.min.js')}}"></script>
		<!-- Full Calendar JS -->
        <script src="{{asset('/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>
		<!-- Chart JS -->
				<script src="{{asset('/plugins/apexchart/apexcharts.min.js')}}"></script>
		<script src="{{asset('/plugins/apexchart/chart-data.js')}}"></script>
				<!-- Custom JS -->
                <script src="{{asset('/js/script.js')}}"></script>
</html>