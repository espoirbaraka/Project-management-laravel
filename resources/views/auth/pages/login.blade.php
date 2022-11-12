@extends('auth.app')

@section('content')
    <div class="layout-login__overlay"></div>
    <div class="layout-login__form bg-white"
         data-perfect-scrollbar>
        <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
            <a href="index.html"
               class="navbar-brand"
               style="min-width: 0">
                <img class="navbar-brand-icon"
                     src="assets/images/stack-logo-blue.svg"
                     width="25"
                     alt="Stack">
                <span>Gestion des projets</span>
            </a>
        </div>


        <form action="{{route('auth.pages.check')}}" method="POST" novalidate>
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label class="text-label"
                       for="email_2">Email:</label>
                <div class="input-group input-group-merge">
                    <input id="email_2"
                           type="email"
                           name="email"
                           class="form-control form-control-prepended"
                           value="{{old('email')}}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label class="text-label"
                       for="password_2">Mot de passe:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2"
                           type="password"
                           name="password"
                           class="form-control form-control-prepended"
                           value="{{old('password')}}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">@error('password'){{$message}} @enderror</span>
            </div>
            <div class="form-group mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox"
                           class="custom-control-input"
                           checked=""
                           id="remember">
                    <label class="custom-control-label"
                           for="remember">Se souvenir de moi</label>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary mb-5"
                        type="submit">Se connecter
                </button>
                <br>
                Vous n'avez pas un compte? <a class="text-body text-underline"
                                              href="{{ route('auth.pages.register') }}">Inscrivez-vous!</a>
            </div>
        </form>
    </div>
@endsection
