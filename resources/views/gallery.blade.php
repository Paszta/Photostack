<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kolekcje Zdjęć</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet" />
    <link href="{{asset('css/gallery.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/full-width-pics.css')}}" rel="stylesheet">



</head>

<body>
@include('layouts.navbar')

<header class="py-5 bg-image-full" style="background-image:
 url('https://images.unsplash.com/photo-1600196245390-039527aad831?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
</header>





<section class="py-5">
    <div class="container">
        <h1>Nasze kolekcje</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="zwierzeta" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Kolekcja: Zwierzęta</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="natura" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kolekcja: Natura</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="jedzenie" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Kolekcja: Jedzenie</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="mnatura" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Kolekcja: Martwa natura</a>
            </li>
        </ul>




        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="zwierzeta">
                <a  href="https://images.unsplash.com/photo-1520933552766-05b7261cb543?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="zwierzeta"><img class="gallery my-2" src="{{asset('miniatury/zwierz1.jpg')}}" alt="Miniatura1" /></a>
                <a href="https://images.unsplash.com/photo-1587735921483-726b196f0223?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="zwierzeta"><img class="gallery my-2" src="{{asset('miniatury/zwierz2.jpg')}}" alt="Miniatura2" /></a>
                <a  href="https://images.unsplash.com/photo-1504173010664-32509aeebb62?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1313&q=80" data-lightbox="zwierzeta"><img class="gallery my-2" src="{{asset('miniatury/zwierz3.jpg')}}" alt="Miniatura3" /></a>
            </div>

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="natura">
                <a  href="https://images.unsplash.com/photo-1590386431526-d2b44df618b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" data-lightbox="natura"><img class="gallery my-2" src="{{asset('miniatury/natura1.jpg')}}" alt="Miniatura1" /></a>
                <a href="https://images.unsplash.com/photo-1589361839739-e451856b2f85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" data-lightbox="natura"><img class="gallery my-2" src="{{asset('miniatury/natura2.jpg')}}" alt="Miniatura2" /></a>
                <a  href="https://images.unsplash.com/photo-1588282322673-c31965a75c3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" data-lightbox="natura"><img class="gallery my-2" src="{{asset('miniatury/natura3.jpg')}}" alt="Miniatura3" /></a>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="jedzenie">
                <a  href="https://images.unsplash.com/photo-1559160582-eab6966b680f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="jedzenie"><img class="gallery my-2" src="{{asset('miniatury/jedzenie1.jpg')}}" alt="Miniatura1" /></a>
                <a href="https://images.unsplash.com/photo-1584483698409-60c493a7b630?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="jedzenie"><img class="gallery my-2" src="{{asset('miniatury/jedzenie2.jpg')}}" alt="Miniatura2" /></a>
                <a  href="https://images.unsplash.com/photo-1515449440149-4396ddd9218b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="jedzenie"><img class="gallery my-2" src="{{asset('miniatury/jedzenie3.jpg')}}" alt="Miniatura3" /></a>
            </div>
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="mnatura">
                <a  href="https://images.unsplash.com/photo-1465060780892-48505fc8f941?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="mnatura"><img class="gallery my-2" src="{{asset('miniatury/mnatura1.jpg')}}" alt="Miniatura1" /></a>
                <a href="https://images.unsplash.com/photo-1585064963019-c94b2e44f1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" data-lightbox="mnatura"><img class="gallery my-2" src="{{asset('miniatury/mnatura2.jpg')}}" alt="Miniatura2" /></a>
                <a  href="https://images.unsplash.com/photo-1559235298-bf3e8ed34441?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" data-lightbox="mnatura"><img class="gallery my-2" src="{{asset('miniatury/mnatura3.jpg')}}" alt="Miniatura3" /></a>
            </div>
        </div>


    </div>
</section>




<section class="py-5 bg-image-full" style="background-image:
 url('https://images.unsplash.com/photo-1600196245390-039527aad831?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
    <div style="height: 200px;"></div>
</section>




<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; AP 2020/2021</p>
    </div>
</footer>




<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>

</body>

</html>
