<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sklep</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">

</head>




<body>

@include('layouts.navbar')


<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4">Sklep PhotoStack</h1>
            @auth
            <form role="form" action="{{route('store')}}" method="post">
                <fieldset>
                {{csrf_field()}}

                    <p class="h1 lead"> Nazwa zdjecia </p>
                <p>
                    <select name="title" id="title">
                        <option value="BunchOfSunflowers"> Bunch of Sunflowers </option>
                        <option value="WhiteFlowers"> White flowers </option>
                        <option value="BrownBrickHouse"> Brown brick house </option>
                        <option value="PinkFlower"> Pink flower </option>
                        <option value="Forest"> Forest </option>
                        <option value="YellowBird"> Yellow Bird </option>
                    </select>
                </p>

                    <p class="h1 lead"> Wymiary </p>
                <p>
                   <select name="dimensions" id="dimensions">
                        <option value="30x18"> 30cm x 18cm </option>
                        <option value="60x36"> 60cm x 36cm </option>
                        <option value="120x72"> 120cm x 72cm </option>
                        </select>
                    </p>

                <div
                    ><button class="btn btn-outline-success" type="submit" >Złóż zamówienie</button>
                </div>

                </fieldset>
            </form>
            @endauth
            @guest
               <p> Nie możesz składać zamówień jak nie jesteś zalogowany </p>
            @endguest
        </div>

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://images.unsplash.com/photo-1590692750735-48193f50f2a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://images.unsplash.com/photo-1590717375998-de6b52965d70?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://images.unsplash.com/photo-1590717426405-545151bbf3ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Poprzednie</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Następne</span>
                </a>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="https://images.unsplash.com/photo-1455659817273-f96807779a8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="pierwszy"><img class="card-img-top" src="https://images.unsplash.com/photo-1455659817273-f96807779a8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Bunch of Sunflowers
                            </h4>
                            <p class="card-text">
                               Autor: Gerome Burneau
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="https://images.unsplash.com/photo-1590717375998-de6b52965d70?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="drugi"><img class="card-img-top" src="https://images.unsplash.com/photo-1590717375998-de6b52965d70?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                White Flowers with Green Leaves
                            </h4>
                            <p class="card-text">
                               Autor: Eva Waardenburg
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="https://images.unsplash.com/photo-1590692750735-48193f50f2a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="trzeci"><img class="card-img-top" src="https://images.unsplash.com/photo-1590692750735-48193f50f2a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Brown Brick House
                            </h4>
                            <p class="card-text">
                              Autor: Esther Wilhelmsson
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="https://images.unsplash.com/photo-1590717426405-545151bbf3ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="czwarty"><img class="card-img-top" src="https://images.unsplash.com/photo-1590717426405-545151bbf3ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Pink Flower
                            </h4>
                            <p class="card-text">
                               Autor: Eva Waardenburg
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="https://images.unsplash.com/photo-1567564375974-b36299d2d6ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1410&q=80" data-lightbox="piaty"><img class="card-img-top" src="https://images.unsplash.com/photo-1567564375974-b36299d2d6ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1410&q=80" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Forest
                            </h4>
                            <p class="card-text">
                               Autor: Cory Winston
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="https://images.unsplash.com/photo-1525275963076-7a70249a9925?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80" data-lightbox="szosty"><img class="card-img-top" src="https://images.unsplash.com/photo-1525275963076-7a70249a9925?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Yellow Bird
                            </h4>
                            <p class="card-text">
                                Autor: Ray Hanessy
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>





<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; AP 2020/2021</p>
    </div>
</footer>




<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>
<script src="j{{asset('s/funkcjeshop.js')}}"></script>

</body>

</html>
