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
