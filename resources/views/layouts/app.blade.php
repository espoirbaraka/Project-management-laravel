<!DOCTYPE html>
<html lang="en"
      dir="ltr">
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
        <link type="text/css" href="{{asset('assets/css/vendor-flatpickr.css')}}" rel="stylesheet">
        <link type="text/css"href="{{asset('assets/css/vendor-flatpickr.rtl.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('assets/css/vendor-flatpickr-airbnb.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('assets/css/vendor-flatpickr-airbnb.rtl.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('assets/vendor/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    </head>
    <body class="layout-mini app-chat">

        @yield('content')

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
        <script src="{{asset('assets/vendor/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('assets/js/flatpickr.js')}}"></script>
        <script src="{{asset('assets/js/settings.js')}}"></script>
        <script src="{{asset('assets/vendor/Chart.min.js')}}"></script>
        <script src="{{asset('assets/js/chartjs-rounded-bar.js')}}"></script>
        <script src="{{asset('assets/js/charts.js')}}"></script>
        <script src="{{asset('assets/js/page.dashboard.js')}}"></script>
        <script>
            (function() {
                'use strict';
                $('.js-sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
                $('.js-sidebar-mini-tabs').on('show.bs.tab', function(e) {
                    $('.js-sidebar-mini-tabs > .active').removeClass('active')
                    $(e.target).parent().addClass('active')
                })
            })()
        </script>
        <script>
            $(function(){
                var url = window.location;

                $('li.sidebar-menu-item a').filter(function() {
                    return this.href == url;
                }).parent().addClass('active');

            });
        </script>
    </body>
</html>
