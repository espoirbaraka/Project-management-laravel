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



                    <ul class="nav navbar-nav d-none d-md-flex ml-3 flex">

                        <li class="nav-item">
                            <a class="nav-link active"
                               href="dashboard">Dashboard</a>
                        </li>

                    </ul>
                </div>

                <form class="search-form d-none d-xl-flex flex mr-3"
                      action="">

                    <input type="text"
                           class="form-control"
                           placeholder="Rechercher">
                </form>



                <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-border navbar-height align-items-center">
                    <li class="nav-item dropdown">
                        <a href="#account_menu"
                           class="nav-link dropdown-toggle"
                           data-toggle="dropdown"
                           data-caret="false">
                                            <span class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-warning">AD</span>
                                                </span>
                        </a>
                        <div id="account_menu"
                             class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item-text dropdown-item-text--lh">
                                <div><strong>{{$LoggedUserInfo['nom']}}</strong></div>
                                <div>{{$LoggedUserInfo['email']}}</div>
                            </div>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item"
                               href="{{route('auth.pages.logout')}}">Se deconnecter</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</div>
