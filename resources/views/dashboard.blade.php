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
                                                        <li class="breadcrumb-item"><a href="dashboard">Tableau de bord</a></li>

                                                    </ol>
                                                </nav>
                                                <h1 class="m-0">Tableau de bord</h1>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="container page__container">
                                    <div class="row card-group-row">
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center bg-primary">
                                                                <i class="material-icons text-white icon-18pt">business</i>
                                                            </span>
                                                    </div>
                                                    <a href="/dashboard"
                                                       class="text-dark">
                                                        <strong>Acceuil</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center">
                                                                <i class="material-icons text-white icon-18pt">person_add</i>
                                                            </span>
                                                    </div>
                                                    <a href="/projet/create"
                                                       class="text-dark">
                                                        <strong>Creer un projet</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center bg-success">
                                                                <i class="material-icons text-white icon-18pt">receipt</i>
                                                            </span>
                                                    </div>
                                                    <a href="/projets"
                                                       class="text-dark">
                                                        <strong>Mes projets</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center bg-info">
                                                                <i class="material-icons text-white icon-18pt">monetization_on</i>
                                                            </span>
                                                    </div>
                                                    <a href="/collaborateur"
                                                       class="text-dark">
                                                        <strong>Mes collaborateurs</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header card-header-large bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex mb-0">Suivi des projets</h4>
                                            <div class="d-flex align-items-center">
                                                <label for="chart-switch-toggle"
                                                       class="mb-0">Show affiliate:</label>
                                                <div class="custom-control custom-checkbox-toggle ml-2">
                                                    <input checked=""
                                                           aria-checked="true"
                                                           type="checkbox"
                                                           id="chart-switch-toggle"
                                                           class="custom-control-input"
                                                           role="switch"
                                                           data-toggle="chart"
                                                           data-target="#ordersChartSwitch"
                                                           data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#4EB4A5","label":"Affiliate","barPercentage":"0.5","barThickness":"20"}]}}'>
                                                    <label class="custom-control-label"
                                                           for="chart-switch-toggle"><span class="sr-only">Show affiliate</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="ordersChartSwitch"
                                                        class="chart-canvas"></canvas>
                                            </div>
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
