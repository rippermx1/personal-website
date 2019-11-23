<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="carlos valdes aravena - curriculum vitae">
    <meta name="keywords" content="freelance, cv, curriculum, carlos, valdes, aravena, portfolio, creative, modern, laravel, nodejs, php, python">
    <!-- Page Title -->
    <title>Carlos Valdés - CV Digital</title>
    <!-- App compiled styles -->
    <link rel="stylesheet" href="css/app.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="images/favicon.png">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|PT+Sans+Narrow:400,700">
</head>
<body>
@yield('algo')
<div class="content">
    <!-- #LOADER# --> <!-- other loader : http://tobiasahlin.com/spinkit/ -->
    <div class="loading-overlay">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>

    <!-- #MENU# -->

    <div class="menu">
        @yield('sidemenu')
    </div>

    <!-- #SCROLL-TOP# -->
    <div class="scroll-top" data-tootik="TOP" data-tootik-conf="invert no-arrow no-fading">
        <i class="fa fa-arrow-up"></i>
    </div>
    <!-- #CONTAINER# -->
    <div class="container">
        @yield('content')
    </div>
</div>

<!-- #JQUERY-PLUGINS# -->
<script src="js/app.js"></script>
<script>
    /**** EasyPieChart Circle Progress ****/
    $(function() {
        //circle progress additional skills
        $('.chart').easyPieChart({
            barColor: '#757575',
            trackColor: 'rgba(255,255,255,0)',
            scaleColor: 'rgba(255,255,255,0)',
            lineWidth: '10',
            lineCap: 'square'
        });
    });
</script>

</body>
</html>
