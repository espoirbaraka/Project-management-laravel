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
                <div
                    class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">

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
                                                        <li class="breadcrumb-item"><a href="{{asset('dashboard')}}">Tableau
                                                                de bord</a></li>

                                                    </ol>
                                                </nav>
                                                <h1 class="m-0">Mes invitations</h1>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="container page__container">
                                    <div class="card">

                                        <div class="table-responsive"
                                             data-toggle="lists"
                                             data-lists-values='["js-lists-values-employee-name"]'>

                                            <table class="table mb-0 thead-border-top-0 table-striped">
                                                <thead>
                                                <tr>

                                                    <th style="width: 18px;">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-toggle-check-all"
                                                                   data-target="#companies"
                                                                   id="customCheckAll">
                                                            <label class="custom-control-label"
                                                                   for="customCheckAll"><span
                                                                    class="text-hide">Toggle all</span></label>
                                                        </div>
                                                    </th>


                                                    <th>Projet & expediteur</th>
                                                    <th style="width: 130px;"
                                                        class="text-center">Date
                                                    </th>
                                                    <th style="width: 50px;"
                                                        class="text-center">Localisation
                                                    </th>

                                                    <th style="width: 120px;"
                                                        class="text-right">Budget
                                                    </th>
                                                    <th style="width: 120px;"
                                                        class="text-right">Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="list"
                                                       id="companies">

                                                @foreach($invitations as $item)
                                                    <tr>

                                                        <td class="text-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                       class="custom-control-input js-check-selected-row"
                                                                       id="customCheck1_1">
                                                                <label class="custom-control-label"
                                                                       for="customCheck1_1"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="material-icons icon-16pt mr-1 text-primary">message</i>
                                                                    <a href="#">{{$item->designation}}</a>
                                                                </div>


                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <small class="text-muted"><i
                                                                        class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                    {{$item->nom}} {{$item->postnom}}</small>
                                                            </div>
                                                        </td>
                                                        <td style="min-width:140px">
                                                            <div class=""><i
                                                                    class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                                <small>{{$item->cr}}</small></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class=""><i
                                                                    class="material-icons icon-16pt text-muted-light mr-1">pin_drop</i>
                                                                <small>{{$item->localisation}}</small></div>
                                                        <td class="text-right"><strong>{{$item->budget}} $</strong></td>
                                                       <td><a href="#"
                                                               class="btn btn-sm btn-link"><i
                                                                    class="material-icons icon-16pt">arrow_forward</i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach




                                                </tbody>
                                            </table>
                                        </div>



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
