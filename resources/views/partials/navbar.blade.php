<div class="mdk-drawer  js-mdk-drawer"
     id="default-drawer"
     data-align="start">
    <div class="mdk-drawer__content js-sidebar-mini"
         data-responsive-width="992px">

        <div class="sidebar sidebar-mini sidebar-primary sidebar-left d-flex flex-column">
            <!-- Navbar Brand -->
            <a href="/dashboard"
               class="navbar-brand d-flex align-items-center justify-content-center ">
                <img class="navbar-brand-icon m-0"
                     src="{{asset('assets/images/logo%402x.png')}}"
                     height="26"
                     alt="BizzArk">
            </a>

            <div class="flex d-flex flex-column flex-nowrap justify-content-start mt-3"
                 data-perfect-scrollbar>
                <ul class="nav flex-column flex-nowrap sidebar-menu js-sidebar-mini-tabs"
                    role="tablist">

                    <li class="sidebar-menu-item"
                        data-toggle="tooltip"
                        data-title="Dashboard"
                        data-placement="right"
                        data-boundary="window">
                        <a class="sidebar-menu-button"
                           href="{{asset('dashboard')}}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                            <span class="sidebar-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item"
                        data-toggle="tooltip"
                        data-title="Creer un projet"
                        data-placement="right"
                        data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button"
                           href="/projet/create">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_seat</i>
                            <span class="sidebar-menu-text">Creer un projet</span>
                        </a>
                    </li>


                    <li class="sidebar-menu-item"
                        data-toggle="tooltip"
                        data-title="Mes projets"
                        data-placement="right"
                        data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button"
                           href="/projet/list">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i>
                            <span class="sidebar-menu-text">Mes projets</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item"
                        data-toggle="tooltip"
                        data-title="Mes participations"
                        data-placement="right"
                        data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button"
                           href="/projet/participation">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i>
                            <span class="sidebar-menu-text">Mes participations</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item"
                        data-toggle="tooltip"
                        data-title="Mes invitations"
                        data-placement="right"
                        data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button"
                           href="/projet/invitation">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">message</i>
                            <span class="sidebar-menu-text">Mes invitations</span>
                        </a>
                    </li>







                </ul>
            </div>


        </div>

    </div>
</div>
