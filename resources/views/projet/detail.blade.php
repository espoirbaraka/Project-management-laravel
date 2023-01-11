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
                                                <h1 class="m-0">{{$projets->designation}}</h1>
                                            </div>

                                        </div>

                                    </div>
                                    @if($projets->created_by == $LoggedUserInfo['id'])
                                        @if($projets->statut == 0)
                                            <form method="POST" action="{{url('projet/demarrer')}}" style="float: right">
                                                @csrf
                                                <input name="id" type="hidden" value="{{$projets->id}}">
                                                <button type="submit" class="btn btn-primary ml-3">Demarrer</button>
                                            </form>
                                        @elseif($projets->statut == 1)
                                            <form method="POST" action="{{url('projet/achever')}}" style="float: right">
                                                @csrf
                                                <input name="id" type="hidden" value="{{$projets->id}}">
                                                <button type="submit" class="btn btn-warning ml-3">Achever</button>
                                            </form>
                                        @endif
                                    @endif
                                </div>



                                <div class="container page__container">
                                    <p class="text-dark-gray d-flex align-items-center mt-3">
                                        <i class="material-icons icon-muted mr-2">list</i>
                                        <strong>Taches</strong>
                                    </p>

                                    @foreach(App\Models\Tache::where('codeprojet','=',$projets->id)->get() as $item2)
                                        <div class="row align-items-center projects-item mb-1">
                                            <div class="col-sm-auto mb-1 mb-sm-0">
                                                <div class="text-dark-gray">De {{$item2->datedebut}} <br> à {{$item2->datedebut}}</div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="card m-0">
                                                    <div class="px-4 py-3">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6"
                                                                 style="min-width: 300px">
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#"
                                                                       class="text-body"><strong class="text-15pt mr-2">{{$item2->designation}}</strong></a>
                                                                    <span class="badge badge-light-gray">NEW</span>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 d-flex align-items-center">
                                                                <i class="material-icons icon-muted icon-20pt mr-2">money</i>
                                                                <a href="#"
                                                                   class="text-body">{{$item2->montant}} $</a>
                                                            </div>
                                                            <div class="col-md-3 d-flex align-items-center">
                                                                @if($item2->statut == 0)
                                                                    <form method="POST" action="{{url('tache/demarrer')}}" style="float: right">
                                                                        @csrf
                                                                        <input name="id" type="hidden" value="{{$item2->id}}">
                                                                        <button type="submit" class="btn btn-primary ml-3">Demarrer</button>
                                                                    </form>
                                                                @elseif($item2->statut == 1)
                                                                    <form method="POST" action="{{url('tache/achever')}}" style="float: right">
                                                                        @csrf
                                                                        <input name="id" type="hidden" value="{{$item2->id}}">
                                                                        <button type="submit" class="btn btn-warning ml-3">Achever</button>
                                                                    </form>
                                                                @endif
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                    <p class="text-dark-gray d-flex align-items-center mt-3">
                                        <i class="material-icons icon-muted mr-2">person</i>
                                        <strong>Bailleur</strong>
                                    </p>

                                    @foreach(Illuminate\Support\Facades\DB::table('bailleurs')
                                                                                ->join('projets', 'bailleurs.codeprojet', '=', 'projets.id')
                                                                                ->select('bailleurs.Bailleur as bailleur')
                                                                                ->where('projets.id','=',$projets->id)->get() as $item)
                                        <div class="row align-items-center projects-item mb-1">
{{--                                            <div class="col-sm-auto mb-1 mb-sm-0">--}}
{{--                                                <div class="text-dark-gray">07:48 PM</div>--}}
{{--                                            </div>--}}
                                            <div class="col-sm">
                                                <div class="card m-0">
                                                    <div class="px-4 py-3">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6"
                                                                 style="min-width: 300px">
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#"
                                                                       class="text-body"><strong class="text-15pt mr-2">{{$item->bailleur}} </strong></a>

                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 d-flex align-items-center">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach







                                    <p class="text-dark-gray d-flex align-items-center mt-3">
                                        <i class="material-icons icon-muted mr-2">person</i>
                                        <strong>Participant</strong>
                                    </p>

                                    @foreach(Illuminate\Support\Facades\DB::table('participations')
                                                                                ->join('utilisateurs', 'participations.code_user', '=', 'utilisateurs.id')
                                                                                ->select('participations.created_at as cr', 'utilisateurs.nom', 'utilisateurs.postnom')
                                                                                ->where('participations.code_projet','=',$projets->id)->get() as $item)
                                        <div class="row align-items-center projects-item mb-1">
                                            {{--                                            <div class="col-sm-auto mb-1 mb-sm-0">--}}
                                            {{--                                                <div class="text-dark-gray">07:48 PM</div>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-sm">
                                                <div class="card m-0">
                                                    <div class="px-4 py-3">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6"
                                                                 style="min-width: 300px">
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#"
                                                                       class="text-body"><strong class="text-15pt mr-2">{{$item->nom}} {{$item->postnom}}</strong></a>

                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 d-flex align-items-center">
                                                                <i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
                                                                <a href="#"
                                                                   class="text-body">Ajouté le {{$item->cr}}</a>
                                                            </div>

                                                        </div>
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
