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

                                                    <th style="width: 20px;"
                                                        class="text-center pl-0">#ID
                                                    </th>
                                                    <th>Company Name</th>
                                                    <th style="width: 130px;"
                                                        class="text-center">Created
                                                    </th>
                                                    <th style="width: 50px;"
                                                        class="text-center">Members
                                                    </th>
                                                    <th style="width: 60px;"
                                                        class="text-center">Growth
                                                    </th>
                                                    <th style="width: 20px;">#INV</th>
                                                    <th style="width: 120px;"
                                                        class="text-right">Total Sales
                                                    </th>
                                                    <th style="width: 50px;">
                                                        <div class="dropdown pull-right">
                                                            <a href="#"
                                                               data-toggle="dropdown"
                                                               class="dropdown-toggle">Bulk</a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="javascript:void(0)"
                                                                   class="dropdown-item"><i class="material-icons  mr-1">work</i>
                                                                    Update Status</a>
                                                                <a href="javascript:void(0)"
                                                                   class="dropdown-item"><i class="material-icons  mr-1">pin_drop</i>
                                                                    Add Location</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="javascript:void(0)"
                                                                   class="dropdown-item"><i class="material-icons  mr-1">archive</i>
                                                                    Archive</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="list"
                                                       id="companies">

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_1">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2178</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Moon Ltd</a>
                                                            </div>

                                                            <div class="badge badge-warning ml-2">PRO</div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">1</a>
                                                    </td>
                                                    <td class="text-center">3% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-right"><strong>$32,124</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_2">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2179</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Blue Space Ltd</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">2</a>
                                                    </td>
                                                    <td class="text-center">5% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-right"><strong>$13,593</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_3">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_3"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2180</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Visual Design</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">3</a>
                                                    </td>
                                                    <td class="text-center">12% <i
                                                            class="material-icons icon-16pt text-danger">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-right"><strong>$2,229</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_4">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_4"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2181</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Fox Technologies</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">4</a>
                                                    </td>
                                                    <td class="text-center">54% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">4</td>
                                                    <td class="text-right"><strong>$41,139</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_5">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_5"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2182</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">JMS Ltd</a>
                                                            </div>

                                                            <div class="badge badge-warning ml-2">PRO</div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">5</a>
                                                    </td>
                                                    <td class="text-center">5% <i
                                                            class="material-icons icon-16pt text-danger">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-right"><strong>$3,002</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_6">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_6"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2183</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Langston Corp</a>
                                                            </div>

                                                            <div class="badge badge-warning ml-2">PRO</div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">6</a>
                                                    </td>
                                                    <td class="text-center">9% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-right"><strong>$2,884</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_7">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_7"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2184</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Compare Solutions</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">7</a>
                                                    </td>
                                                    <td class="text-center">3% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-right"><strong>$15,844</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_8">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_8"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2185</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Hill Enterprises</a>
                                                            </div>

                                                            <div class="badge badge-warning ml-2">PRO</div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">8</a>
                                                    </td>
                                                    <td class="text-center">12% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">8</td>
                                                    <td class="text-right"><strong>$9,772</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_9">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_9"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2186</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Monday Ltd</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">9</a>
                                                    </td>
                                                    <td class="text-center">17% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-right"><strong>$44,172</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_10">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_10"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2187</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Hexio Enterprise</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">10</a>
                                                    </td>
                                                    <td class="text-center">31% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-right"><strong>$21,984</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_11">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_11"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2188</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Moon Ltd</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">11</a>
                                                    </td>
                                                    <td class="text-center">3% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">11</td>
                                                    <td class="text-right"><strong>$32,124</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_12">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_12"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2189</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Blue Space Ltd</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">12</a>
                                                    </td>
                                                    <td class="text-center">5% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">12</td>
                                                    <td class="text-right"><strong>$13,593</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_13">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_13"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2190</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Visual Design</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">13</a>
                                                    </td>
                                                    <td class="text-center">12% <i
                                                            class="material-icons icon-16pt text-danger">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">13</td>
                                                    <td class="text-right"><strong>$2,229</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_14">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_14"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2191</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Fox Technologies</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">14</a>
                                                    </td>
                                                    <td class="text-center">54% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">14</td>
                                                    <td class="text-right"><strong>$41,139</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_15">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_15"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2192</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">JMS Ltd</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">15</a>
                                                    </td>
                                                    <td class="text-center">5% <i
                                                            class="material-icons icon-16pt text-danger">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">15</td>
                                                    <td class="text-right"><strong>$3,002</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_16">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_16"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2193</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Langston Corp</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">16</a>
                                                    </td>
                                                    <td class="text-center">9% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">16</td>
                                                    <td class="text-right"><strong>$2,884</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_17">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_17"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2194</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Compare Solutions</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">17</a>
                                                    </td>
                                                    <td class="text-center">3% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">17</td>
                                                    <td class="text-right"><strong>$15,844</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_18">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_18"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2195</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Hill Enterprises</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">18</a>
                                                    </td>
                                                    <td class="text-center">12% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">18</td>
                                                    <td class="text-right"><strong>$9,772</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_19">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_19"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2196</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Monday Ltd</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">19</a>
                                                    </td>
                                                    <td class="text-center">17% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">19</td>
                                                    <td class="text-right"><strong>$44,172</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_20">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_20"><span
                                                                    class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <div class="badge badge-light">#2197</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                                <a href="#">Hexio Enterprise</a>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted"><i
                                                                    class="material-icons icon-16pt mr-1">pin_drop</i>
                                                                Miami, Florida, USA</small>
                                                        </div>
                                                    </td>
                                                    <td style="min-width:140px">
                                                        <div class=""><i
                                                                class="material-icons icon-16pt text-muted-light mr-1">today</i>
                                                            <small>05-05-2019</small></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="material-icons icon-16pt text-muted mr-1">account_circle</i>
                                                        <a href="#">20</a>
                                                    </td>
                                                    <td class="text-center">31% <i
                                                            class="material-icons icon-16pt text-success">arrow_upward</i>
                                                    </td>
                                                    <td class="text-center">20</td>
                                                    <td class="text-right"><strong>$21,984</strong></td>
                                                    <td><a href="#"
                                                           class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-body text-right">
                                            15 <span class="text-muted">of 1,430</span> <a href="#"
                                                                                           class="text-muted-light"><i
                                                    class="material-icons ml-1">arrow_forward</i></a>
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
