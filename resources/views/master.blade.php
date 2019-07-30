<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href={!! asset("img/core-img/favicon.ico") !!}>
    

    <!-- Core Style CSS -->
    <link rel="stylesheet" href={!! asset('css/core-style.css') !!}>
    <link rel="stylesheet" href={!! asset('css/style.css') !!}>

</head>

<body>
@include('pages.header')
<!-- ##### Header Area Start ##### -->
@yield('detail')
@yield('checkout')
@yield('content')
@yield('blog')
@yield('contact')


<!-- ##### Right Side Cart Area ##### -->

<!-- ##### Shop Grid Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('pages.footer')
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src={!! asset('js/jquery/jquery-2.2.4.min.js') !!}></script>
<!-- Popper js -->
<script src={!! asset('js/popper.min.js') !!}></script>
<!-- Bootstrap js -->
<script src={!! asset("js/bootstrap.min.js") !!}></script>
<!-- Plugins js -->
<script src={!! asset("js/plugins.js") !!}></script>
<!-- Classy Nav js -->
<script src={!! asset("js/classy-nav.min.js") !!}></script>
<!-- Active js -->
<script src={!! asset("js/active.js") !!}></script>

<script src={!! asset("js/custom.js") !!}></script>

</body>

</html>