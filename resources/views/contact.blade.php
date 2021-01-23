<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kontakt</title>

    <link href="{{asset('css/contact.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/cont.js')}}"></script>
    <link href="{{asset('css/fontello/css/fontello.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/full-width-pics.css')}}" rel="stylesheet">

</head>

<body>

@include('layouts.navbar')

<header class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
    <div id="log" style="position: relative;"> <img class="img-fluid d-block mx-auto" src="{{asset('css/logo/logo2.png')}}" alt=""> </div>
</header>



<section class="py-5">
    <div class="container">
        <h1>Informacje o twórcy strony</h1>
        <p class="lead"> Alicja Pasztelan IIST 4.5/10 </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
</section>




<section class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
    <div style="height: 200px;"></div>
</section>




<section class="py-5">
    <div class="container">
        <h1>Kontakt</h1>
        <div id="b" class="bullets">
            <h4><span class="icon-mobile"></span> Tel: 123-456-789 </h4>
            <h4><span class="icon-mail"></span> Adres e-mail: abc@defgi.hj </h4>
            <h4><span class="icon-facebook-rect"></span> PhotoStack </h4>
            <h4><span class="icon-instagram-filled"></span> @photostack </h4>
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

</body>

</html>
