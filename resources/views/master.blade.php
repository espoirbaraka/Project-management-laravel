<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion des projets</title>
    <meta name="robots" content="noindex">
    <link type="text/css" href="{{asset('assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/app.rtl.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-material-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-material-icons.rtl.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/vendor-fontawesome-free.rtl.css')}}" rel="stylesheet">
</head>

<body class="layout-login">

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


    <form action="https://bizzark.frontted.com/index.html"
          novalidate>
        <div class="form-group">
            <label class="text-label"
                   for="email_2">Email:</label>
            <div class="input-group input-group-merge">
                <input id="email_2"
                       type="email"
                       required=""
                       class="form-control form-control-prepended">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-envelope"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label"
                   for="password_2">Mot de passe:</label>
            <div class="input-group input-group-merge">
                <input id="password_2"
                       type="password"
                       required=""
                       class="form-control form-control-prepended">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fa fa-key"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mb-5">
            <div class="custom-control custom-checkbox">
                <input type="checkbox"
                       class="custom-control-input"
                       checked=""
                       id="remember">
                <label class="custom-control-label"
                       for="remember">Remember me</label>
            </div>
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary mb-5"
                    type="submit">Login
            </button>
            <br>
            <a href="#">Forgot password?</a> <br>
            Don't have an account? <a class="text-body text-underline"
                                      href="signup.html">Sign up!</a>
        </div>
    </form>
</div>

<script src="{{asset('assets/vendor/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendor/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendor/dom-factory.js')}}"></script>
<script src="{{asset('assets/vendor/material-design-kit.js')}}"></script>
<script src="{{asset('assets/js/toggle-check-all.js')}}"></script>
<script src="{{asset('assets/js/check-selected-row.js')}}"></script>
<script src="{{asset('assets/js/dropdown.js')}}"></script>
<script src="{{asset('assets/js/sidebar-mini.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/app-settings.js')}}"></script>
</body>
</html>
