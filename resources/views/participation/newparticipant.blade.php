@extends('layouts.app')

@section('content')
    <div class="preloader"></div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout"
         data-push
         data-fullbleed
         data-responsive-width="992px">
        <div class="mdk-drawer-layout__content">

            <div class="mdk-header-layout js-mdk-header-layout"
                 data-has-scrolling-region>

                @include('partials.header')

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">

                    <div class="app-chat-container">
                        <div class="row m-0 h-100">
                            <div class="col d-flex flex-column p-0 h-100"
                                 data-perfect-scrollbar>

                                <div class="container  page__heading-container">
                                    <div class="page__heading">

                                        <div class="d-flex align-items-center">
                                            <div>
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb mb-0">
                                                        <li class="breadcrumb-item"><a href="{{asset('dashboard')}}">Tableau de bord</a></li>

                                                    </ol>
                                                </nav>

                                                <h1 class="m-0">Ajouter un participant à {{$projet->designation}} </h1>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="container page__container">

                                    <form method="POST" action="{{url('/participation/save')}}">
                                        @csrf
                                        <div class="card">
                                            <div class="card-form__body card-body">
                                                <input name="code_projet" type="hidden" value="{{$projet->id}}">
                                                <div class="form-group">
                                                    <label for="slug">Email du participant</label>
                                                    <input id="slug"
                                                           type="email"
                                                           name="email"
                                                           class="form-control"
                                                           placeholder="">
                                                </div>


                                            </div>
                                            <div class="card-body text-center">

                                                <button type="submit"
                                                        class="btn btn-success">Ajouter
                                                </button>
                                            </div>

                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

        @include('partials.navbar')

    </div>
    <div id="app-settings">
        <app-settings layout-active="mini"
                      :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
    </div>
@endsection
