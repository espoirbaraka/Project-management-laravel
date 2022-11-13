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
                                                <h1 class="m-0">Mes projets</h1>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="trello-container">
                                    <div class="trello-board page__container">
                                        <div class="trello-board__tasks"
                                             data-toggle="dragula"
                                             data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
                                            <div class="card bg-light border">
                                                <div class="card-header card-header-sm bg-white border-primary">
                                                    <h4 class="card-header__title">Todo (3)</h4>
                                                </div>
                                                <div class="card-body p-2">
                                                    <div class="trello-board__tasks-list card-list"
                                                         id="trello-tasks-1">


                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Envato Item Presentation</strong> <span
                                                                        class="badge badge-success ml-auto">RESOLVED</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2 avatar-group">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                        <a href="#">+2 more</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add Trello App Page</strong> <span
                                                                        class="badge badge-warning ml-auto">NEED HELP</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a href="#"
                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trello-board__tasks"
                                             data-toggle="dragula"
                                             data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
                                            <div class="card bg-light border">
                                                <div class="card-header card-header-sm bg-white border-primary">
                                                    <h4 class="card-header__title">Todo (3)</h4>
                                                </div>
                                                <div class="card-body p-2">
                                                    <div class="trello-board__tasks-list card-list"
                                                         id="trello-tasks-1">

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add UI Buttons Page</strong> <span
                                                                        class="badge badge-light-gray ml-auto">OPEN</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Envato Item Presentation</strong> <span
                                                                        class="badge badge-success ml-auto">RESOLVED</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2 avatar-group">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                        <a href="#">+2 more</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add Trello App Page</strong> <span
                                                                        class="badge badge-warning ml-auto">NEED HELP</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a href="#"
                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trello-board__tasks"
                                             data-toggle="dragula"
                                             data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
                                            <div class="card bg-light border">
                                                <div class="card-header card-header-sm bg-white border-primary">
                                                    <h4 class="card-header__title">Todo (3)</h4>
                                                </div>
                                                <div class="card-body p-2">
                                                    <div class="trello-board__tasks-list card-list"
                                                         id="trello-tasks-1">

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add UI Buttons Page</strong> <span
                                                                        class="badge badge-light-gray ml-auto">OPEN</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Envato Item Presentation</strong> <span
                                                                        class="badge badge-success ml-auto">RESOLVED</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2 avatar-group">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                        <a href="#">+2 more</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add Trello App Page</strong> <span
                                                                        class="badge badge-warning ml-auto">NEED HELP</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a href="#"
                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trello-board__tasks"
                                             data-toggle="dragula"
                                             data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
                                            <div class="card bg-light border">
                                                <div class="card-header card-header-sm bg-white border-primary">
                                                    <h4 class="card-header__title">Todo (3)</h4>
                                                </div>
                                                <div class="card-body p-2">
                                                    <div class="trello-board__tasks-list card-list"
                                                         id="trello-tasks-1">

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add UI Buttons Page</strong> <span
                                                                        class="badge badge-light-gray ml-auto">OPEN</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Envato Item Presentation</strong> <span
                                                                        class="badge badge-success ml-auto">RESOLVED</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2 avatar-group">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                        <a href="#">+2 more</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add Trello App Page</strong> <span
                                                                        class="badge badge-warning ml-auto">NEED HELP</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a href="#"
                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trello-board__tasks"
                                             data-toggle="dragula"
                                             data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
                                            <div class="card bg-light border">
                                                <div class="card-header card-header-sm bg-white border-primary">
                                                    <h4 class="card-header__title">Todo (3)</h4>
                                                </div>
                                                <div class="card-body p-2">
                                                    <div class="trello-board__tasks-list card-list"
                                                         id="trello-tasks-1">

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add UI Buttons Page</strong> <span
                                                                        class="badge badge-light-gray ml-auto">OPEN</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Envato Item Presentation</strong> <span
                                                                        class="badge badge-success ml-auto">RESOLVED</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2 avatar-group">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                        <a href="#">+2 more</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add Trello App Page</strong> <span
                                                                        class="badge badge-warning ml-auto">NEED HELP</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a href="#"
                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trello-board__tasks"
                                             data-toggle="dragula"
                                             data-dragula-containers='["#trello-tasks-1", "#trello-tasks-2", "#trello-tasks-3", "#trello-tasks-4"]'>
                                            <div class="card bg-light border">
                                                <div class="card-header card-header-sm bg-white border-primary">
                                                    <h4 class="card-header__title">Todo (3)</h4>
                                                </div>
                                                <div class="card-body p-2">
                                                    <div class="trello-board__tasks-list card-list"
                                                         id="trello-tasks-1">

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add UI Buttons Page</strong> <span
                                                                        class="badge badge-light-gray ml-auto">OPEN</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Envato Item Presentation</strong> <span
                                                                        class="badge badge-success ml-auto">RESOLVED</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2 avatar-group">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                        <a href="#">+2 more</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="trello-board__tasks-item card shadow-none border">
                                                            <div class="p-3">
                                                                <p class="m-0 d-flex align-items-center">
                                                                    <strong>Add Trello App Page</strong> <span
                                                                        class="badge badge-warning ml-auto">NEED HELP</span>
                                                                </p>

                                                                <p class="d-flex align-items-center mb-2 small">
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
                                                                    <span class="text-muted mr-2">Stack</span>
                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
                                                                    <span class="text-muted"><strong>28</strong> comments</span>
                                                                </p>
                                                                <div class="media align-items-center">
                                                                    <div class="media-left mr-2">

                                                                        <div class="avatar avatar-xxs"
                                                                             data-toggle="tooltip"
                                                                             data-placement="top"
                                                                             title="Janell D.">
                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                                                 alt="Avatar"
                                                                                 class="avatar-img rounded-circle">
                                                                        </div>

                                                                    </div>
                                                                    <div class="media-body small media-middle">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a href="#"
                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="trello-board__tasks">--}}
{{--                                            <div class="card bg-light border">--}}
{{--                                                <div class="card-header card-header-sm bg-white border-warning">--}}
{{--                                                    <h4 class="card-header__title">In Progress (2)</h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body p-2">--}}
{{--                                                    <div class="trello-board__tasks-list card-list"--}}
{{--                                                         id="trello-tasks-2">--}}

{{--                                                        <div class="trello-board__tasks-item card shadow-none border">--}}
{{--                                                            <div class="p-3">--}}
{{--                                                                <p class="m-0 d-flex align-items-center">--}}
{{--                                                                    <strong>Add Trello App Page</strong> <span--}}
{{--                                                                        class="badge badge-danger ml-auto">HIGH</span>--}}
{{--                                                                </p>--}}

{{--                                                                <p class="d-flex align-items-center mb-2 small">--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>--}}
{{--                                                                    <span class="text-muted mr-2">Stack</span>--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>--}}
{{--                                                                    <span class="text-muted"><strong>28</strong> comments</span>--}}
{{--                                                                </p>--}}
{{--                                                                <div class="media align-items-center">--}}
{{--                                                                    <div class="media-left mr-2 avatar-group">--}}

{{--                                                                        <div class="avatar avatar-xxs"--}}
{{--                                                                             data-toggle="tooltip"--}}
{{--                                                                             data-placement="top"--}}
{{--                                                                             title="Janell D.">--}}
{{--                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"--}}
{{--                                                                                 alt="Avatar"--}}
{{--                                                                                 class="avatar-img rounded-circle">--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="avatar avatar-xxs"--}}
{{--                                                                             data-toggle="tooltip"--}}
{{--                                                                             data-placement="top"--}}
{{--                                                                             title="Janell D.">--}}
{{--                                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg"--}}
{{--                                                                                 alt="Avatar"--}}
{{--                                                                                 class="avatar-img rounded-circle">--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <div class="media-body small media-middle">--}}

{{--                                                                        <a href="#">+1 more</a>--}}

{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="trello-board__tasks-item card shadow-none border">--}}
{{--                                                            <div class="p-3">--}}
{{--                                                                <p class="m-0 d-flex align-items-center">--}}
{{--                                                                    <strong>Add UI Alerts Page</strong> <span--}}
{{--                                                                        class="badge badge-light-gray ml-auto">OPEN</span>--}}
{{--                                                                </p>--}}

{{--                                                                <p class="d-flex align-items-center mb-2 small">--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>--}}
{{--                                                                    <span class="text-muted mr-2">Stack</span>--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>--}}
{{--                                                                    <span class="text-muted"><strong>28</strong> comments</span>--}}
{{--                                                                </p>--}}
{{--                                                                <div class="media align-items-center">--}}
{{--                                                                    <div class="media-left mr-2">--}}

{{--                                                                        <div class="avatar avatar-xxs"--}}
{{--                                                                             data-toggle="tooltip"--}}
{{--                                                                             data-placement="top"--}}
{{--                                                                             title="Janell D.">--}}
{{--                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"--}}
{{--                                                                                 alt="Avatar"--}}
{{--                                                                                 class="avatar-img rounded-circle">--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <div class="media-body small media-middle">--}}

{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <a href="#"--}}
{{--                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="trello-board__tasks">--}}
{{--                                            <div class="card bg-light border">--}}
{{--                                                <div class="card-header card-header-sm bg-white border-purple">--}}
{{--                                                    <h4 class="card-header__title">Review (1)</h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body p-2">--}}
{{--                                                    <div class="trello-board__tasks-list card-list"--}}
{{--                                                         id="trello-tasks-3">--}}

{{--                                                        <div class="trello-board__tasks-item card shadow-none border">--}}
{{--                                                            <div class="p-3">--}}
{{--                                                                <p class="m-0 d-flex align-items-center">--}}
{{--                                                                    <strong>Add UI Modals Page</strong> <span--}}
{{--                                                                        class="badge badge-success ml-auto">RESOLVED</span>--}}
{{--                                                                </p>--}}

{{--                                                                <p class="d-flex align-items-center mb-2 small">--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>--}}
{{--                                                                    <span class="text-muted mr-2">Stack</span>--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>--}}
{{--                                                                    <span class="text-muted"><strong>28</strong> comments</span>--}}
{{--                                                                </p>--}}
{{--                                                                <div class="media align-items-center">--}}
{{--                                                                    <div class="media-left mr-2">--}}

{{--                                                                        <div class="avatar avatar-xxs"--}}
{{--                                                                             data-toggle="tooltip"--}}
{{--                                                                             data-placement="top"--}}
{{--                                                                             title="Janell D.">--}}
{{--                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"--}}
{{--                                                                                 alt="Avatar"--}}
{{--                                                                                 class="avatar-img rounded-circle">--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <div class="media-body small media-middle">--}}

{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <a href="#"--}}
{{--                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="trello-board__tasks">--}}
{{--                                            <div class="card bg-light border">--}}
{{--                                                <div class="card-header card-header-sm bg-white border-success">--}}
{{--                                                    <h4 class="card-header__title">Done (1)</h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="card-body p-2">--}}
{{--                                                    <div class="trello-board__tasks-list card-list"--}}
{{--                                                         id="trello-tasks-4">--}}

{{--                                                        <div class="trello-board__tasks-item card shadow-none border">--}}
{{--                                                            <div class="p-3">--}}
{{--                                                                <p class="m-0 d-flex align-items-center">--}}
{{--                                                                    <strong>Add UI Avatars Page</strong> <span--}}
{{--                                                                        class="badge badge-warning ml-auto">NEED HELP</span>--}}
{{--                                                                </p>--}}

{{--                                                                <p class="d-flex align-items-center mb-2 small">--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>--}}
{{--                                                                    <span class="text-muted mr-2">Stack</span>--}}
{{--                                                                    <i class="material-icons icon-14pt mr-1 text-muted">comment</i>--}}
{{--                                                                    <span class="text-muted"><strong>28</strong> comments</span>--}}
{{--                                                                </p>--}}
{{--                                                                <div class="media align-items-center">--}}
{{--                                                                    <div class="media-left mr-2">--}}

{{--                                                                        <div class="avatar avatar-xxs"--}}
{{--                                                                             data-toggle="tooltip"--}}
{{--                                                                             data-placement="top"--}}
{{--                                                                             title="Janell D.">--}}
{{--                                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"--}}
{{--                                                                                 alt="Avatar"--}}
{{--                                                                                 class="avatar-img rounded-circle">--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <div class="media-body small media-middle">--}}

{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <a href="#"--}}
{{--                                                       class="btn btn-link text-muted btn-block mt-2">+ Add Card</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
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
