@extends('layouts.userfroms')

@section('header')
    <title>Logowanie</title>
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
                    <h2>Formularz logowania: </h2>


                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <fieldset class="form-group">

                            <div class="form-row">
                                <div class="col">
                                    <label for="login">E-mail: </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col">
                                    <label for="haslo"> Hasło: </label>
                                    <input type="password" id="password" name="password" required class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">
                                Zaloguj
                            </button>
                            <button type="reset" class="btn btn-danger">
                                Odrzuć
                            </button>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
