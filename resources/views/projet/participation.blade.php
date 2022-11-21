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
                                                <h1 class="m-0">Mes participations</h1>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="trello-container">
                                    <div class="trello-board page__container">
                                        @foreach($projets as $item)
                                            <div class="trello-board__tasks"
                                                 data-toggle="dragula"
                                                 data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
                                                <div class="card bg-light border">
                                                    <div class="card-header card-header-sm bg-white border-primary">
                                                        <div class="float-left">
                                                            <h4 class="card-header__title">{{$item->designation}}</h4>
                                                        </div>
                                                        <div class="float-right">
                                                            <small class="text-danger"><i
                                                                    class="material-icons icon-16pt mr-1">person</i>
                                                                {{$item->nom}} {{$item->postnom}}</small>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <div class="trello-board__tasks-list card-list"
                                                             id="trello-tasks-1">

                                                            @foreach(App\Models\Tache::where('codeprojet','=',$item->id)->get() as $item2)
                                                                <div class="trello-board__tasks-item card shadow-none border">
                                                                    <div class="p-3">
                                                                        <p class="m-0 d-flex align-items-center">
                                                                            <strong>{{$item2->designation}}</strong> <span
                                                                                class="badge badge-light-gray ml-auto">En attente</span>
                                                                        </p>


                                                                        <div class="media align-items-center">
                                                                            <div class="media-left mr-2">

                                                                                <div class="avatar avatar-xxs"
                                                                                     data-toggle="tooltip"
                                                                                     data-placement="top"
                                                                                     title="Janell D.">
                                                                                    <img src="{{asset('assets/images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                                                                         alt="Avatar"
                                                                                         class="avatar-img rounded-circle">
                                                                                </div>

                                                                            </div>
                                                                            <div class="media-body small media-middle">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach




                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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
