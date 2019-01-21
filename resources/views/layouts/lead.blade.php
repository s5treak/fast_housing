<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="properties.html" />
    <link rel="shortcut icon" type="image/png" href="img/logo1.png" />

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!--            Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

   

    <title>@yield('title')</title>
</head>
<body>
    


   
            @yield('content')
            @include('layouts.footer')
        
   
    <!--     Scripts-->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!--    Navbar scroll background color script-->
    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready
            $(window).scroll(function() {
                if ($(window).scrollTop() > 130) {
                    $(".navbar").addClass("navbar-dark");
                } else {
                    $(".navbar").removeClass("navbar-dark");
                }
            });
            // If Mobile, add background color when toggler is clicked
            $(".navbar-toggler").click(function() {
                if (!$(".navbar-collapse").hasClass("show")) {
                    $(".navbar").addClass("navbar-dark");
                } else {
                    if ($(window).scrollTop() < 50) {
                        $(".navbar").removeClass("navbar-dark");
                    } else {

                    }
                }
            });
            // ############
            // document ready
        });
    </script>

</body>
</html>
