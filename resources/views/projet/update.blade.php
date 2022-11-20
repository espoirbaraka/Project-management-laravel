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
                                                <h1 class="m-0">Modifier {{$projets->designation}}</h1>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="container page__container">

                                    <form method="POST" action="{{url('/projet/update')}}">
                                        @csrf
                                        <div class="card">
                                            <div class="card-form__body card-body">
                                                <input name="created_by" type="hidden" value="{{$LoggedUserInfo['id']}}">
                                                <input name="id" type="hidden" value="{{$projets->id}}">
                                                <div class="form-group">
                                                    <label for="slug">Designation</label>
                                                    <input id="slug"
                                                           type="text"
                                                           name="designation"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="{{$projets->designation}}"
                                                    >
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Budget</label>
                                                    <input id="title"
                                                           type="number"
                                                           name="budget"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="{{$projets->budget}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Localisation</label>
                                                    <input id="title"
                                                           type="text"
                                                           name="localisation"
                                                           class="form-control"
                                                           value="{{$projets->localisation}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="title">Bailleur</label>
                                                    <input id="title"
                                                           type="text"
                                                           name="bailleur"
                                                           class="form-control"
                                                           placeholder=""
                                                            value="{{$projets->bailleur}}">
                                                </div>

{{--                                                <div class="form-group">--}}
{{--                                                    <label for="title">Date debut</label>--}}
{{--                                                    <input id="title"--}}
{{--                                                           type="date"--}}
{{--                                                           name="datedebut"--}}
{{--                                                           class="form-control"--}}
{{--                                                           placeholder=""--}}
{{--                                                           value="{{$projets->datedebut}}">--}}
{{--                                                </div>--}}

{{--                                                <div class="form-group">--}}
{{--                                                    <label for="title">Date fin</label>--}}
{{--                                                    <input id="title"--}}
{{--                                                           type="date"--}}
{{--                                                           name="datefin"--}}
{{--                                                           class="form-control"--}}
{{--                                                           placeholder=""--}}
{{--                                                           value="{{$projets->datefin}}">--}}
{{--                                                </div>--}}

                                            </div>
                                            <div class="card-body text-center">

                                                <button type="submit"
                                                        class="btn btn-success">Modifier
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
