<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('header')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('js/funkcje.js')}}"></script>
    <link href="{{asset('css/kst.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">

</head>



<body id="page-top">


@include('layouts.navbar')

@yield('content')



<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
            </div>
        </div>
    </div>
</section>




<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; AP 2020/2021</p>
    </div>
</footer>




<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/scrolling-nav.js')}}"></script>

</body>

</html>
