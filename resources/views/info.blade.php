<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informacje</title>

    <link href="{{asset('css/info.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">

</head>

<body id="page-top">

@include('layouts.navbar')

<header id="more">
    <div class="container text-center">
        <h1>Dowiedz się o nas więcej</h1>
        <p class="lead">Strona poświęcona fotografii</p>
        <p> Zdjęcie autorstwa Vidara Nordiliego-Mathiasena </p>
    </div>
</header>

<section id="about">
    <div class="container">
        <div class="row">
            <div id="wjazd" style="position: relative;" class="col-lg-8 mx-auto">
                <h2>Informacje na temat strony</h2>
                <p class="lead">Ta strona to tylko projekt</p>
                <ul>
                    <li>Wykorzystuje template'y z bootstrapa</li>
                    <li>Darmowe template'y</li>
                    <li>Wszystkie zdjęcia użyte są dostępne do użytku ogólnego dla każdego</li>
                    <li>Jedyne jakie jest wymaganie przy użyciu każdego ze zdjęć to podpisać autora</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Co oferujemy?</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                <p> Zdjęcie autorstwa Bardena Colluma </p>
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
<script src="{{asset('js/info.js')}}"></script>

</body>

</html>
