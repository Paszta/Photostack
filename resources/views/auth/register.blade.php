
@extends('layouts.userfroms')

@section('header')
<title>Rejestracja</title>
<header id="more">
    <div class="container text-center">
        <h1>Dołącz do społeczności PhotoStack!</h1>
        <p> Zdjęcie autorstwa Daniela O'Dowoda </p>
    </div>
</header>
@endsection

@section('content')

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Formularz rejestracyjny: </h2>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <fieldset class="form-group">

                            <div class="form-row">
                                <div class="col">
                                    <label for="login">Login: </label>
                                    <input id="login" type="text" name="login" class="form-control @error('login') is-invalid @enderror"  value="{{old('login')}}" required autocomplete="login" autofocus>
                                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="fullname"> Imie i nazwisko: </label>
                                    <input type="text" id="name" name="name" required class="form-control @error('name') is-invalid @enderror" pattern="^[A-ZŁĄŹŻĆĄŚ][a-zążśźćł]{2,15}\s[A-ZŁĄŹŻĆĄŚ][a-zążśźćł]{2,15}-?([A-ZŁĄŹŻĆĄŚ][a-zążśźćł]{2,15}|)$" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="haslo"> Hasło: </label>
                                    <input type="password" id="password" name="password"  required class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="wiek">Wiek </label>
                                    <input id="age" type="number" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Min 18 lat!" required min="18">
                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <legend class="col-form-label col-sm-2 pt-0">Płeć</legend>
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" required name="gender" value="Kobieta">
                                        <label class="form-check-label" for="kobieta">
                                            Kobieta
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="Mezczyzna">
                                        <label class="form-check-label" for="mezczyzna">
                                            Mężczyzna
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="Nieokreslone">
                                        <label class="form-check-label" for="mezczyzna">
                                            Nie chcę określać
                                        </label>
                                    </div>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>



                        <fieldset class="form-group">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required  value="{{ old('email')}}" autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="numer">Numer telefonu</label>
                                    <input type="text" class="form-control @error('phonenum') is-invalid @enderror" name="phonenum" id="phonenum" required pattern="[0-9]{9}" value="{{ old('phonenum')}}" autocomplete="phonenum">

                                    @error('phonenum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="ulica">Ulica i numer</label>
                                <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" id="street"value="{{ old('street')}}">
                                @error('street')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="miasto">Miasto</label>
                                    <input type="text" required name="city" class="form-control @error('city') is-invalid @enderror" id="city" value="{{ old('city')}}">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <legend >Wybierz swoje ulubione tematy:</legend>
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input"  type="checkbox" name="favs[]" value="Architektura"> Architektura
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="favs[]" value="Jedzenie"> Jedzenie
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="favs[]" value="Zwierzeta"> Zwierzęta
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="favs[]" value="Krajobrazy"> Krajobrazy
                                    </div>
                                </div>
                            </div>
                        </fieldset>


                        <button type="submit" class="btn btn-primary">
                            Rejestruj
                        </button>
                        <button type="reset" class="btn btn-danger" value="Odrzuc"> Odrzuć </button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
