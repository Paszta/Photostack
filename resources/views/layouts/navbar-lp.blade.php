<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">Odkrywaj PhotoStack</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landingpage')}}">Strona głowna
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('info')}}">Informacje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallery')}}">Kolekcje zdjęć</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shop')}}">Sklep</a>
                </li>
                @guest
                    @if(Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{'login'}}">Zaloguj się</a>
                        </li>
                    @endif
                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Rejestracja</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropup" class="nav-link dropup-toggle" href="{{ route('home') }}" role="button" data-toggle="dropup" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->login }}
                        </a>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
