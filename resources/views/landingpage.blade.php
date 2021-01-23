<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PhotoStack</title>

    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/lp_style.css')}}" rel="stylesheet">

</head>

<body>

<ul class="bg-slideshow">
    <li>
        <span>Image 01</span>
        <div>
            <h3>Autor: Artem Bryzgalov</h3>
        </div>
    </li>

    <li><span>Image 02</span>
        <div>
            <h3>Autor: Anton Darius</h3>
        </div>
    </li>

    <li><span>Image 03</span>
        <div>
            <h3>Autor: Florian Olivo</h3>
        </div>
    </li>

    <li><span>Image 04</span>
        <div>
            <h3>Autor: Aranprime</h3>
        </div>
    </li>

    <li><span>Image 05</span>
        <div>
            <h3>Autor: Carlos Linder</h3>
        </div>
    </li>

    <li><span>Image 06</span>
        <div>
            <h3>Autor: Regina Calvo</h3>
        </div>
    </li>

</ul>

@include('layouts.navbar-lp')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mt-5">Witaj na PhotoStacku</h1>
                <p>Przeglądaj kolekcje zdjęć o swojej ulubionej tematyce lub zamów swoje ulubione zdjęcie w wybranym przez siebie formacie!</p>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
