@extends('layouts.app')

@section('content')
    <div class="preloader"></div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout"
         data-push
         data-fullbleed
         data-responsive-width="992px">
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout"
                 data-has-scrolling-region>

                <!-- Header -->

                <div id="header"
                     class="mdk-header js-mdk-header m-0"
                     data-fixed>
                    <div class="mdk-header__content">

                        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0"
                             id="navbar"
                             data-primary>
                            <div class="container-fluid p-0">

                                <!-- Navbar toggler -->

                                <button class="navbar-toggler navbar-toggler-right d-block d-md-none"
                                        type="button"
                                        data-toggle="sidebar">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="navbar-collapse flex">

                                    <div class="dropdown d-none d-sm-flex border-right navbar-border navbar-height align-items-center">
                                        <a href="#demos"
                                           class="btn btn-navbar dropdown-toggle mx-3"
                                           data-toggle="dropdown">CRM</a>
                                        <div id="demos"
                                             class="dropdown-menu">
                                            <a class="dropdown-item active"
                                               href="mini-dashboard.html">CRM</a>
                                            <a class="dropdown-item"
                                               href="mini-app-projects.html">Projects</a>
                                            <a class="dropdown-item"
                                               href="mini-student-dashboard.html">Learning</a>
                                            <a class="dropdown-item"
                                               href="mini-social-activity.html">Social</a>
                                        </div>
                                    </div>

                                    <ul class="nav navbar-nav d-none d-md-flex ml-3 flex">

                                        <li class="nav-item">
                                            <a class="nav-link active"
                                               href="mini-dashboard.html">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#"
                                               class="nav-link dropdown-toggle"
                                               data-toggle="dropdown">Companies</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                   href="mini-companies.html">Manage Companies</a>
                                                <a class="dropdown-item"
                                                   href="mini-company.html">Company Details</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               href="mini-employees.html">Employees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               href="mini-staff.html">Reports</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#"
                                               class="nav-link dropdown-toggle"
                                               data-toggle="dropdown">Components</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                   href="mini-ui-buttons.html">Buttons</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-alerts.html">Alerts</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-avatars.html">Avatars</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-modals.html">Modals</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-charts.html">Charts</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-icons.html">Icons</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-forms.html">Forms</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-range-sliders.html">Range Sliders</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-datetime.html">Time &amp; Date</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-tables.html">Tables</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-tabs.html">Tabs</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-loaders.html">Loaders</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-drag.html">Drag &amp; Drop</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-pagination.html">Pagination</a>
                                                <a class="dropdown-item"
                                                   href="mini-ui-vector-maps.html">Vector Maps</a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <form class="search-form d-none d-xl-flex flex mr-3"
                                      action="https://bizzark.frontted.com/mini-index.html">
                                    <button class="btn"
                                            type="submit"><i class="material-icons">search</i></button>
                                    <input type="text"
                                           class="form-control"
                                           placeholder="Search">
                                </form>

                                <ul class="nav navbar-nav ml-auto d-none d-md-flex border-left">
                                    <!-- <li class="nav-item">
    <a href="" class="nav-link">
      <i class="material-icons">help_outline</i> Get Help
    </a>
    </li>
    <li class="nav-item mr-3">
    <a href="mini-pricing.html" class="btn btn-outline-warning">
      <i class="material-icons">star</i> PRO
    </a>
    </li> -->
                                    <li class="nav-item dropdown">
                                        <a href="#notifications_menu"
                                           class="nav-link dropdown-toggle"
                                           data-toggle="dropdown"
                                           data-caret="false">
                                            <i class="material-icons nav-icon navbar-notifications-indicator">notifications_none</i>
                                        </a>
                                        <div id="notifications_menu"
                                             class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                            <div class="dropdown-item d-flex align-items-center py-2">
                                                <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                                <a href="javascript:void(0)"
                                                   class="text-muted"><small>Clear all</small></a>
                                            </div>
                                            <div class="navbar-notifications-menu__content"
                                                 data-perfect-scrollbar>
                                                <div class="py-2">

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                 style="width: 32px; height: 32px;">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">A.Demian</a> left a comment on <a href="#">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs"
                                                                     style="width: 32px; height: 32px;">
                                                                    <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs"
                                                                     style="width: 32px; height: 32px;">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                 style="width: 32px; height: 32px;">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">A.Demian</a> left a comment on <a href="#">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs"
                                                                     style="width: 32px; height: 32px;">
                                                                    <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs"
                                                                     style="width: 32px; height: 32px;">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                 style="width: 32px; height: 32px;">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">A.Demian</a> left a comment on <a href="#">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs"
                                                                     style="width: 32px; height: 32px;">
                                                                    <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs"
                                                                     style="width: 32px; height: 32px;">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="javascript:void(0);"
                                               class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-border navbar-height align-items-center">
                                    <li class="nav-item dropdown">
                                        <a href="#account_menu"
                                           class="nav-link dropdown-toggle"
                                           data-toggle="dropdown"
                                           data-caret="false">
                                            <!-- <img src="assets/images/avatar/demi.png" class="rounded-circle" width="40" alt="Frontted"> -->
                                            <span class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-warning">AD</span>
                                                </span>
                                        </a>
                                        <div id="account_menu"
                                             class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-item-text dropdown-item-text--lh">
                                                <div><strong>Adrian Demian</strong></div>
                                                <div>@adriandemian</div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item active"
                                               href="mini-dashboard.html">Dashboard</a>
                                            <a class="dropdown-item"
                                               href="mini-profile.html">My profile</a>
                                            <a class="dropdown-item"
                                               href="mini-edit-account.html">Edit account</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                               href="mini-login.html">Logout</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- // END Header -->

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
                                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                        <li class="breadcrumb-item active"
                                                            aria-current="page">Dashboard</li>
                                                    </ol>
                                                </nav>
                                                <h1 class="m-0">Dashboard</h1>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#"
                                                   class="btn btn-light"><i class="material-icons icon-16pt text-muted mr-1">settings</i> Settings</a>
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
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Companies</strong>
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
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Create New User</strong>
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
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Manage Invoices</strong>
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
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Earnings</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center bg-purple">
                                                                <i class="material-icons text-white icon-18pt">shop</i>
                                                            </span>
                                                    </div>
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Products</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center bg-warning">
                                                                <i class="material-icons text-white icon-18pt">account_balance</i>
                                                            </span>
                                                    </div>
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Account Balance</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center bg-primary">
                                                                <i class="material-icons text-white icon-18pt">assignment</i>
                                                            </span>
                                                    </div>
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Assignments</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 card-group-row__col">
                                            <div class="card card-group-row__card card-shadow">
                                                <div class="p-2 d-flex flex-row align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle text-center bg-danger">
                                                                <i class="material-icons text-white icon-18pt">phone</i>
                                                            </span>
                                                    </div>
                                                    <a href="#"
                                                       class="text-dark">
                                                        <strong>Calls</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header card-header-large bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex mb-0">Earnings</h4>
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

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header card-header-large bg-white">
                                                    <h4 class="card-header__title">Top Companies</h4>
                                                </div>

                                                <table class="table table-striped border-bottom mb-0">

                                                    <tr>
                                                        <td style="width: 40px;">1.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Moon Ltd</strong></a>
                                                            </div>
                                                            <small class="text-muted">(2 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            3% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-success">PAID</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $32,124
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 40px;">2.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Blue Space Ltd</strong></a>
                                                            </div>
                                                            <small class="text-muted">(3 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            5% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-success">PAID</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $13,593
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 40px;">3.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Visual Design</strong></a>
                                                            </div>
                                                            <small class="text-muted">(4 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            12% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-danger">DUE</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $2,229
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 40px;">4.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Fox Technologies</strong></a>
                                                            </div>
                                                            <small class="text-muted">(5 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            54% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-success">PAID</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $41,139
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 40px;">5.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>JMS Ltd</strong></a>
                                                            </div>
                                                            <small class="text-muted">(6 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            5% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-danger">DUE</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $3,002
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 40px;">6.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Langston Corp</strong></a>
                                                            </div>
                                                            <small class="text-muted">(7 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            9% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-success">PAID</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $2,884
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 40px;">7.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Compare Solutions</strong></a>
                                                            </div>
                                                            <small class="text-muted">(8 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            3% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-success">PAID</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $15,844
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 40px;">8.</td>
                                                        <td style="width: 200px;">
                                                            <div>
                                                                <a href="#"
                                                                   class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Hill Enterprises</strong></a>
                                                            </div>
                                                            <small class="text-muted">(9 invoices)</small>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 100px">
                                                            12% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 60px">
                                                            <div class="badge badge-soft-success">PAID</div>
                                                        </td>
                                                        <td class="text-right"
                                                            style="width: 80px">
                                                            $9,772
                                                        </td>
                                                    </tr>

                                                </table>

                                                <div class="card-footer text-center border-0">
                                                    <a class="text-muted"
                                                       href="#">View All (391)</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header card-header-large bg-white d-flex align-items-center">
                                                    <h4 class="card-header__title flex m-0">Recent Activity</h4>
                                                    <div data-toggle="flatpickr"
                                                         data-flatpickr-wrap="true"
                                                         data-flatpickr-static="true"
                                                         data-flatpickr-mode="range"
                                                         data-flatpickr-alt-format="d/m/Y"
                                                         data-flatpickr-date-format="d/m/Y">
                                                        <a href="javascript:void(0)"
                                                           class="link-date"
                                                           data-toggle>13/03/2018 <span class="text-muted mx-1">to</span> 20/03/2018</a>
                                                        <input class="d-none"
                                                               type="hidden"
                                                               value="13/03/2018 to 20/03/2018"
                                                               data-input>
                                                    </div>
                                                </div>
                                                <div class="card-header card-header-tabs-basic nav"
                                                     role="tablist">
                                                    <a href="#activity_all"
                                                       class="active"
                                                       data-toggle="tab"
                                                       role="tab"
                                                       aria-controls="activity_all"
                                                       aria-selected="true">All</a>
                                                    <a href="#activity_purchases"
                                                       data-toggle="tab"
                                                       role="tab"
                                                       aria-controls="activity_purchases"
                                                       aria-selected="false">Purchases</a>
                                                    <a href="#activity_emails"
                                                       data-toggle="tab"
                                                       role="tab"
                                                       aria-controls="activity_emails"
                                                       aria-selected="false">Emails</a>
                                                    <a href="#activity_quotes"
                                                       data-toggle="tab"
                                                       role="tab"
                                                       aria-controls="activity_quotes"
                                                       aria-selected="false">Quotes</a>
                                                </div>
                                                <div class="list-group tab-content list-group-flush">
                                                    <div class="tab-pane active show fade"
                                                         id="activity_all">

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>

                                                                    <strong class="text-15pt mr-1">Jenell D. Matney</strong>
                                                                </div>
                                                                <small class="text-muted">4 days ago</small>
                                                            </div>
                                                            <div>$573</div>

                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                                        <i class="material-icons">email</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>

                                                                    <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>
                                                                </div>
                                                                <small>Improve spacings on Projects page</small>
                                                            </div>
                                                            <small class="text-muted">3 days ago</small>

                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  ">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>

                                                                    <strong class="text-15pt mr-1">Joseph S. Ferland</strong>
                                                                </div>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <div>$244</div>

                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  ">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>

                                                                    <strong class="text-15pt mr-1">Bryan K. Davis</strong>
                                                                </div>
                                                                <small class="text-muted">1 day ago</small>
                                                            </div>
                                                            <div>$664</div>

                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  ">
                                                                        <i class="material-icons">description</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>

                                                                    <strong class="text-15pt mr-1">Kaci M. Langston</strong>
                                                                </div>
                                                                <small class="text-muted">just now</small>
                                                            </div>
                                                            <div>$631</div>

                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="card-footer text-center border-0">
                                                            <a class="text-muted"
                                                               href="#">View All (54)</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane"
                                                         id="activity_purchases">

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                                </div>
                                                                <small class="text-muted">4 days ago</small>
                                                            </div>
                                                            <div>$573</div>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                                </div>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <div>$612</div>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                                </div>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <div>$244</div>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle ">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                                </div>
                                                                <small class="text-muted">1 day ago</small>
                                                            </div>
                                                            <div>$664</div>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle ">
                                                                        <i class="material-icons">monetization_on</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1"></strong>

                                                                </div>
                                                                <small class="text-muted">just now</small>
                                                            </div>
                                                            <div>$631</div>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane"
                                                         id="activity_emails">

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                                        <i class="material-icons">email</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Jenell D. Matney</strong>

                                                                </div>
                                                                <small>Confirmation required for design</small>
                                                            </div>
                                                            <small class="text-muted">4 days ago</small>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                                        <i class="material-icons">email</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                                </div>
                                                                <small>Improve spacings on Projects page</small>
                                                            </div>
                                                            <small class="text-muted">3 days ago</small>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                                        <i class="material-icons">email</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                                </div>
                                                                <small>You unlocked a new Badge</small>
                                                            </div>
                                                            <small class="text-muted">2 days ago</small>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle ">
                                                                        <i class="material-icons">email</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                                </div>
                                                                <small>Meeting on Friday</small>
                                                            </div>
                                                            <small class="text-muted">1 day ago</small>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                        <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                            <div class="avatar avatar-xs mr-3">
                                                                    <span class="avatar-title rounded-circle ">
                                                                        <i class="material-icons">email</i>
                                                                    </span>
                                                            </div>

                                                            <div class="flex">
                                                                <div class="d-flex align-items-middle">
                                                                    <div class="avatar avatar-xxs mr-1">
                                                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                             alt="Avatar"
                                                                             class="avatar-img rounded-circle">
                                                                    </div>
                                                                    <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                                </div>
                                                                <small>Design a new Brochure</small>
                                                            </div>
                                                            <small class="text-muted">just now</small>
                                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane"
                                                         id="activity_quotes"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col bg-white border-left d-none d-lg-flex flex-column p-0 h-100 filters-sidebar">
                                <!-- START ACTIVITY -->
                                <div class="flex"
                                     data-perfect-scrollbar>
                                    <div class="card-header card-header-large bg-white d-flex flex-column">
                                        <h4 class="card-header__title flex">Recent Activity</h4>
                                        <div class=" flatpickr-wrapper d-flex">
                                            <div data-toggle="flatpickr"
                                                 data-flatpickr-wrap="true"
                                                 data-flatpickr-static="true"
                                                 data-flatpickr-mode="range"
                                                 data-flatpickr-alt-format="d/m/Y"
                                                 data-flatpickr-date-format="d/m/Y">
                                                <a href="javascript:void(0)"
                                                   class="link-date"
                                                   data-toggle>13/03/2018 <span class="text-muted mx-1">to</span> 20/03/2018</a>
                                                <input class="d-none"
                                                       type="hidden"
                                                       value="13/03/2018 to 20/03/2018"
                                                       data-input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush">

                                        <div class="list-group-item d-flex align-items-start ">
                                            <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <img src="assets/images/logo%402x.png"
                                                             width="10"
                                                             alt="avatar">
                                                    </span>
                                            </div>

                                            <div class="flex d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="avatar avatar-xxs mr-1">
                                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>
                                                    <strong class="text-15pt text-ellipsis mr-1">Jenell D. Matney</strong>
                                                </div>
                                                <small class="mb-1">Confirmation required for design</small>
                                                <small class="text-muted">4 days ago</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item d-flex align-items-start ">
                                            <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <img src="assets/images/logo%402x.png"
                                                             width="10"
                                                             alt="avatar">
                                                    </span>
                                            </div>

                                            <div class="flex d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="avatar avatar-xxs mr-1">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>
                                                    <strong class="text-15pt text-ellipsis mr-1">Sherri J. Cardenas</strong>
                                                </div>
                                                <small class="mb-1">Improve spacings on Projects page</small>
                                                <small class="text-muted">3 days ago</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item d-flex align-items-start  bg-light ">
                                            <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <img src="assets/images/logo%402x.png"
                                                             width="10"
                                                             alt="avatar">
                                                    </span>
                                            </div>

                                            <div class="flex d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="avatar avatar-xxs mr-1">
                                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>
                                                    <strong class="text-15pt text-ellipsis mr-1">Joseph S. Ferland</strong>
                                                </div>
                                                <small class="mb-1">You unlocked a new Badge</small>
                                                <small class="text-muted">2 days ago</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item d-flex align-items-start  bg-light ">
                                            <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <img src="assets/images/logo%402x.png"
                                                             width="10"
                                                             alt="avatar">
                                                    </span>
                                            </div>

                                            <div class="flex d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="avatar avatar-xxs mr-1">
                                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>
                                                    <strong class="text-15pt text-ellipsis mr-1">Bryan K. Davis</strong>
                                                </div>
                                                <small class="mb-1">Meeting on Friday</small>
                                                <small class="text-muted">1 day ago</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item d-flex align-items-start  bg-light ">
                                            <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <img src="assets/images/logo%402x.png"
                                                             width="10"
                                                             alt="avatar">
                                                    </span>
                                            </div>

                                            <div class="flex d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="avatar avatar-xxs mr-1">
                                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>
                                                    <strong class="text-15pt text-ellipsis mr-1">Kaci M. Langston</strong>
                                                </div>
                                                <small class="mb-1">Design a new Brochure</small>
                                                <small class="text-muted">just now</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="card-footer text-center border-0">
                                            <a class="text-muted"
                                               href="#">View All (54)</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END ACTIVITY -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

        <!-- drawer -->
        <div class="mdk-drawer  js-mdk-drawer"
             id="default-drawer"
             data-align="start">
            <div class="mdk-drawer__content js-sidebar-mini"
                 data-responsive-width="992px">

                <div class="sidebar sidebar-mini sidebar-primary sidebar-left d-flex flex-column">
                    <!-- Navbar Brand -->
                    <a href="mini-dashboard.html"
                       class="navbar-brand d-flex align-items-center justify-content-center ">
                        <img class="navbar-brand-icon m-0"
                             src="assets/images/logo%402x.png"
                             height="26"
                             alt="BizzArk">
                    </a>

                    <div class="flex d-flex flex-column flex-nowrap justify-content-start mt-3"
                         data-perfect-scrollbar>
                        <ul class="nav flex-column flex-nowrap sidebar-menu js-sidebar-mini-tabs"
                            role="tablist">

                            <li class="sidebar-menu-item active"
                                data-toggle="tooltip"
                                data-title="Dashboard"
                                data-placement="right"
                                data-boundary="window">
                                <a class="sidebar-menu-button"
                                   href="mini-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                    <span class="sidebar-menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item"
                                data-toggle="tooltip"
                                data-title="Messages"
                                data-placement="right"
                                data-container="body"
                                data-boundary="window">
                                <a class="sidebar-menu-button"
                                   href="mini-app-chat.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">question_answer</i>
                                    <span class="sidebar-menu-text">Messages</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item"
                                role="presentation"
                                data-toggle="tooltip"
                                data-title="Companies"
                                data-placement="right"
                                data-container="body"
                                data-boundary="window">
                                <a class="sidebar-menu-button js-sidebar-mini-toggle"
                                   href="#sm_crm_companies"
                                   data-toggle="tab"
                                   role="tab"
                                   aria-controls="sm_crm_companies"
                                   aria-selected="false">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">business_center</i>
                                    <span class="sidebar-menu-text">Companies</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item "
                                data-toggle="tooltip"
                                data-title="Employees"
                                data-placement="right"
                                data-container="body"
                                data-boundary="window">
                                <a class="sidebar-menu-button"
                                   href="mini-employees.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                                    <span class="sidebar-menu-text">Employees</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item "
                                data-toggle="tooltip"
                                data-title="Reports"
                                data-placement="right"
                                data-container="body"
                                data-boundary="window">
                                <a class="sidebar-menu-button"
                                   href="mini-staff.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">report</i>
                                    <span class="sidebar-menu-text">Reports</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item"
                                role="presentation"
                                data-toggle="tooltip"
                                data-title="UI Components"
                                data-placement="right"
                                data-container="body"
                                data-boundary="window">
                                <a class="sidebar-menu-button js-sidebar-mini-toggle"
                                   href="#sm_components"
                                   data-toggle="tab"
                                   role="tab"
                                   aria-controls="sm_components"
                                   aria-selected="false">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i>
                                    <span class="sidebar-menu-text">UI Components</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item"
                                role="presentation"
                                data-toggle="tooltip"
                                data-title="Layouts"
                                data-placement="right"
                                data-boundary="window">
                                <a class="sidebar-menu-button js-sidebar-mini-toggle"
                                   href="#sm_layouts"
                                   data-toggle="tab"
                                   role="tab"
                                   aria-controls="sm_layouts"
                                   aria-selected="false">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                    <span class="sidebar-menu-text">Layouts</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul class="nav flex-column flex-nowrap sidebar-menu">
                        <li class="sidebar-menu-item"
                            data-toggle="tooltip"
                            data-title="Settings"
                            data-placement="right"
                            data-boundary="window">
                            <a class="sidebar-menu-button"
                               href="#">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">settings</i>
                                <span class="sidebar-menu-text">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary"
                     data-perfect-scrollbar>
                    <div class="tab-content">
                        <div class="tab-pane"
                             id="sm_crm_companies"
                             role="tabpanel">
                            <div class="sidebar-heading">Companies</div>
                            <div class="sidebar-block p-0">
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-companies.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">business_center</i>
                                            <span class="sidebar-menu-text">Companies</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a class="sidebar-menu-button"
                                           href="mini-company.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">business_center</i>
                                            <span class="sidebar-menu-text">Company</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane"
                             id="sm_social_profile"
                             role="tabpanel">
                            <div class="sidebar-heading">Profile</div>
                            <div class="sidebar-block p-0">
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-social-profile.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                                            <span class="sidebar-menu-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-social-edit-account.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">portrait</i>
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane"
                             id="sm_social_blog"
                             role="tabpanel">
                            <div class="sidebar-heading">Blog</div>
                            <div class="sidebar-block p-0">
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-social-blog.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">filter_frames</i>
                                            <span class="sidebar-menu-text">Blog</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a class="sidebar-menu-button"
                                           href="mini-social-edit-post.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">edit</i>
                                            <span class="sidebar-menu-text">Edit Post</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane"
                             id="sm_components"
                             role="tabpanel">
                            <div class="sidebar-heading">UI Components</div>
                            <div class="sidebar-block p-0">
                                <ul class="sidebar-menu"
                                    id="components_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-buttons.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                                            <span class="sidebar-menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-alerts.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                                            <span class="sidebar-menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-avatars.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                            <span class="sidebar-menu-text">Avatars</span>
                                            <span class="badge badge-primary ml-auto">NEW</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-modals.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                                            <span class="sidebar-menu-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-charts.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                            <span class="sidebar-menu-text">Charts</span>
                                            <span class="badge badge-warning ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-icons.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                                            <span class="sidebar-menu-text">Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-forms.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                            <span class="sidebar-menu-text">Forms</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-range-sliders.html">
                                            <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                            <span class="sidebar-menu-text">Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-datetime.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                                            <span class="sidebar-menu-text">Time &amp; Date</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-tables.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                            <span class="sidebar-menu-text">Tables</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-tabs.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>
                                            <span class="sidebar-menu-text">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-loaders.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                                            <span class="sidebar-menu-text">Loaders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-drag.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                                            <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-pagination.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                                            <span class="sidebar-menu-text">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="mini-ui-vector-maps.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                            <span class="sidebar-menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane"
                             id="sm_layouts"
                             role="tabpanel">
                            <div class="sidebar-heading">Layouts</div>
                            <div class="sidebar-block p-0">
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="index.html">Default</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fluid-dashboard.html">Fluid</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-dashboard.html">Fixed</a>
                                    </li>
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="mini-dashboard.html">Mini</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- // END drawer -->

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