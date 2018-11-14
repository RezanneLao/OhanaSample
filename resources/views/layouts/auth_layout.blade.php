<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ohana') }}</title>

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/material-kit/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit/material-kit.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/material-kit/material-bootstrap-wizard.css">

</head>

<body class="image-container set-full-height" style="background-image: url('assets/img/index/dg1.jpg'); background-repeat: no-repeat; background-attachment: fixed;">

 <main class="py-4">
            @yield('content-nav')
    </main>

 <main class="py-4">
            @yield('content-info')
    </main>

<footer class="footer">
    <div class="container text-center">
        <div class="copyright pull-center">
            &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>, O H A N A &nbsp;<i class="fa fa-heart heart"></i>
            <!-- made with <i class="fa fa-heart heart"></i> by Team Ohana -->
        </div>
    </div>
</footer>
    
</body>


<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js " type="text/javascript "></script>
<script src="assets/js/material-kit/bootstrap.min.js " type="text/javascript "></script>
<script src="assets/js/material-kit/jquery.bootstrap.js "></script>

<!-- Sweet Alert 2 plugin -->
<script src="assets/js/material-kit/sweetalert2.js"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/material-kit/material-bootstrap-wizard.js "></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/material-kit/jquery.validate.min.js "></script>

<!--    Plugin for Date Picker   -->
<script src="assets/js/material-kit/bootstrap-datepicker.js"></script>

<script src="assets/js/build-profile.js"></script>
<script src="assets/js/material-kit/material-kit.js" type="text/javascript"></script>

</html>