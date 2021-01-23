@extends('layouts.home')

@section('header')
    <title>Home</title>
    <header id="more">
        <div class="container text-center">
            <h1>Witaj, {{ Auth::user()->name }}</h1>
        </div>
    </header>
@endsection

@section('content')
<section id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="row justify-content-center">
                                <p class="lead h2 "> Twoje dane </p>
                               <table class="table table-bordered">
                                   <thead>
                                   <tr>
                                       <th scope="col">Login</th>
                                       <th scope="col">Imię i nazwisko</th>
                                       <th scope="col">Wiek</th>
                                       <th scope="col">Płeć</th>
                                       <th scope="col">E-mail</th>
                                       <th scope="col">Telefon</th>
                                       <th scope="col">Ulica i miasto</th>
                                       <th scope="col">Ulubione tematy</th>
                                       <th scope="col">Data dołączenia</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>{{ Auth::user()->login }}</td>
                                       <td>{{ Auth::user()->name }}</td>
                                       <td>{{ Auth::user()->age }}</td>
                                       <td>{{ Auth::user()->gender }}</td>
                                       <td>{{ Auth::user()->email }}</td>
                                       <td>{{ Auth::user()->phonenum }}</td>
                                       <td>{{ Auth::user()->street }} {{ Auth::user()->city }}</td>
                                       <td>{{ Auth::user()->favs }}</td>
                                       <td>{{ Auth::user()->created_at }}</td>
                                   </tr>
                                   </tbody>
                               </table>
                            </div>
                            <div class="col-lg-8 mx-auto">
                                <p class="lead h2 "> Zmień swoje dane </p>
                                <form method="POST" action="{{ route('update') }}">
                                {{csrf_field()}}
                                   <input name="_method" type="hidden" value="PUT">

                                <fieldset class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="fullname"> Imie i nazwisko: </label>
                                            <input type="text" id="name" name="name" required class="form-control @error('name') is-invalid @enderror" pattern="^[A-ZŁĄŹŻĆĄŚ][a-zążśźćł]{2,15}\s[A-ZŁĄŹŻĆĄŚ][a-zążśźćł]{2,15}-?([A-ZŁĄŹŻĆĄŚ][a-zążśźćł]{2,15}|)$" value="{{ Auth::user()->name }}"  autocomplete="name" autofocus>
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
                                            <input id="age" type="number" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ Auth::user()->age }}" placeholder="Min 18 lat!" required min="18">
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
                                                    @if(Auth::user()->gender == 'Kobieta')
                                                        <input class="form-check-input" type="radio" checked required name="gender" value="Kobieta">
                                                    @else
                                                        <input class="form-check-input" type="radio" required name="gender" value="Kobieta">
                                                    @endif
                                                    <label class="form-check-label" for="kobieta">
                                                        Kobieta
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    @if(Auth::user()->gender == 'Mezczyzna')
                                                        <input class="form-check-input" type="radio" checked name="gender" value="Mezczyzna">
                                                    @else
                                                        <input class="form-check-input" type="radio" name="gender" value="Mezczyzna">
                                                    @endif
                                                    <label class="form-check-label" for="mezczyzna">
                                                        Mężczyzna
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    @if(Auth::user()->gender == 'Nieokreslone')
                                                        <input class="form-check-input" type="radio" checked name="gender" value="Nieokreslone">
                                                    @else
                                                        <input class="form-check-input" type="radio" name="gender" value="Nieokreslone">
                                                    @endif
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
                                            <div class="form-group">
                                                <label for="numer">Numer telefonu</label>
                                                <input type="text" class="form-control @error('phonenum') is-invalid @enderror" name="phonenum" id="phonenum" required pattern="[0-9]{9}" value="{{ Auth::user()->phonenum }}" autocomplete="phonenum">

                                                @error('phonenum')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror

                                            </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="ulica">Ulica i numer</label>
                                            <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" id="street"value="{{ Auth::user()->street }}">
                                            @error('street')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="miasto">Miasto</label>
                                                <input type="text" required name="city" class="form-control @error('city') is-invalid @enderror" id="city" value="{{ Auth::user()->city }}">
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
                                                    @if(str_contains(Auth::user()->favs,'Architektura'))
                                                        <input class="form-check-input"  type="checkbox" checked name="favs[]" value="Architektura"> Architektura
                                                    @else
                                                        <input class="form-check-input"  type="checkbox" name="favs[]" value="Architektura"> Architektura
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if(str_contains(Auth::user()->favs,'Jedzenie'))
                                                        <input class="form-check-input" type="checkbox" checked name="favs[]" value="Jedzenie"> Jedzenie
                                                    @else
                                                        <input class="form-check-input" type="checkbox" name="favs[]" value="Jedzenie"> Jedzenie
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if(str_contains(Auth::user()->favs,'Zwierzeta'))
                                                        <input class="form-check-input" type="checkbox" checked name="favs[]" value="Zwierzeta"> Zwierzęta
                                                    @else
                                                        <input class="form-check-input" type="checkbox" name="favs[]" value="Zwierzeta"> Zwierzęta
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if(str_contains(Auth::user()->favs,'Krajobrazy'))
                                                        <input class="form-check-input" type="checkbox" checked name="favs[]" value="Krajobrazy"> Krajobrazy
                                                    @else
                                                        <input class="form-check-input" type="checkbox" name="favs[]" value="Krajobrazy"> Krajobrazy
                                                    @endif
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-outline-primary">
                                                Zmień dane
                                            </button>


                                        </div>
                                    </fieldset>

                                </form>


                                <form action="{{route('remove',['id'=>Auth::user()->id])}}" method="POST">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-outline-danger"> Usuń konto </button>
                                </form>

                            </div>


                            <div class="row justify-content-center">
                                <p class="lead h2"> Twoje zamówienia </p>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id zamówienia</th>
                                        <th scope="col">Tytuł</th>
                                        <th scope="col">Wymiary</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Zlecono dn.</th>
                                        <th scope="col">Anulowanie</th>
                                    </tr>
                                    </thead>
                                @foreach($orders as $order)
                                    @if(($order->user->id == Auth::user()->id ))
                                        <thead>
                                        <tr>
                                    <td>{{$order -> id}}</td>
                                    <td>{{$order -> title}}</td>
                                    <td>{{$order -> dimensions}}</td>
                                    <td>{{$order -> status}}</td>
                                    <td>{{$order -> created_at}}</td>
                                            @if($order->status == 'Zaakceptowany')
                                                <form action="{{route('cancel',['id'=>$order->id])}}" method="POST">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="PATCH">
                                                    <td><button class="btn btn-outline-danger"> Anuluj zamówienie o id {{$order->id}}</button></td>
                                                </form>
                                        </tr></thead>
                                        @else
                                            <td>Tego zamówienia nie można już anulować</td>
                                            @endif
                                    @endif
                                @endforeach
                                </table>
                            </div>




            </div>
        </div>
    </div>
    </div>
</section>
@endsection
