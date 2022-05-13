<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Al-Shabaka</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- plugin css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- animsition -->
    <link href="css/animsition.min.css" rel="stylesheet">
    <!-- lightgallery -->
    <link href="css/css/lightgallery.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link href="css/themify-icons.css" rel="stylesheet">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen"/>
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    <!-- owl -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <!-- main css -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/queriesstyle.css" media="all" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
{{--    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">--}}
</head>

<body class="bg-init">

<!-- preloader -->
<div id="preloader">
    <div class="loader">
        <div class="spinner"></div>
    </div>
</div>
<!-- preloader -->


<div class="content-wrapper animsition-overlay">
    <div id="bgblock"></div>

    <x-main.navbar></x-main.navbar>
    {{$slot}}
    <x-main.footer></x-main.footer>

</div>

<!-- ScrolltoTop -->
<div id="totop" class="init">
    <i class="fa fa-chevron-up"></i>
</div>

<!-- plugin js -->
<script src="js/pluginson3step.js"></script>
<!-- slider revolution  -->
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- velocity  -->
<script src="js/velocity.min.js"></script>
<!-- velocity  -->
<script src="js/lightgallery.js"></script>
<!-- main js -->
<script src="js/sticky.js"></script>
<script src="js/on3step.js"></script>
<script src="js/plugin-form.js"></script>


</body>
</html>
