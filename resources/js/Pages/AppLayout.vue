<script>
</script>
<template>

    <div>
        <!-- preloader -->
<!--        <div class="preloader">-->
<!--            <img src="../../../public/logo.svg" alt="logo">-->
<!--            <div class="preloader-icon"></div>-->
<!--        </div>-->
        <!-- ./ preloader -->

        <!-- sidebars -->

        <!-- notifications sidebar -->
        <div class="sidebar" id="notifications">
            <div class="sidebar-header d-block align-items-end">
                <div class="align-items-center d-flex justify-content-between py-4">
                    Notifications
                    <button data-sidebar-close>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-content">
                <div class="tab-content">
                    <div class="tab-pane active" id="activities">
                        <div class="tab-pane-body">
                            <ul class="list-group list-group-flush">
                                <li class="px-0 list-group-item">
                                    <a href="#" class="d-flex">
                                        <div class="flex-shrink-0">
                                            <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-bold d-flex justify-content-between">
                                                You joined a group
                                            </p>
                                            <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-0 list-group-item">
                                    <a href="#" class="d-flex">
                                        <div class="flex-shrink-0">
                                            <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-bold d-flex justify-content-between">
                                                Storage is running low!
                                            </p>
                                            <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-0 list-group-item">
                                    <a href="#" class="d-flex">
                                        <div class="flex-shrink-0">
                                            <figure class="avatar avatar-secondary me-3">
                                            <span
                                                class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between">
                                                1 person sent a file
                                            </p>
                                            <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-0 list-group-item">
                                    <a href="#" class="d-flex">
                                        <div class="flex-shrink-0">
                                            <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between">
                                                Reports ready to download
                                            </p>
                                            <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-0 list-group-item">
                                    <a href="#" class="d-flex">
                                        <div class="flex-shrink-0">
                                            <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between">
                                                2 steps verification
                                            </p>
                                            <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> 20 min ago
                                    </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane-footer">
                            <a href="#" class="btn btn-success">
                                <i class="bi bi-check2 me-2"></i> Make All Read
                            </a>
                            <a href="#" class="btn btn-danger ms-2">
                                <i class="bi bi-trash me-2"></i> Delete all
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="notes">
                        <div class="tab-pane-body">
                            <ul class="list-group list-group-flush">
                                <li class="px-0 list-group-item">
                                    <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                        This month's report will be prepared.
                                    </p>
                                    <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                                    <div class="mt-2">
                                        <a href="#">Edit</a>
                                        <a href="#" class="text-danger ms-2">Delete</a>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item">
                                    <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                        An email will be sent to the customer.
                                    </p>
                                    <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                                    <div class="mt-2">
                                        <a href="#">Edit</a>
                                        <a href="#" class="text-danger ms-2">Delete</a>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item">
                                    <p class="mb-0 d-flex justify-content-between">
                                        The meeting will be held.
                                    </p>
                                    <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                                    <div class="mt-2">
                                        <a href="#">Edit</a>
                                        <a href="#" class="text-danger ms-2">Delete</a>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item">
                                    <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                        Conversation with users.
                                    </p>
                                    <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                                    <div class="mt-2">
                                        <a href="#">Edit</a>
                                        <a href="#" class="text-danger ms-2">Delete</a>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item">
                                    <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                        Payment refund will be made to the customer.
                                    </p>
                                    <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                                    <div class="mt-2">
                                        <a href="#">Edit</a>
                                        <a href="#" class="text-danger ms-2">Delete</a>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Payment form will be activated.
                                    </p>
                                    <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                                    <div class="mt-2">
                                        <a href="#">Edit</a>
                                        <a href="#" class="text-danger ms-2">Delete</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane-footer">
                            <a href="#" class="btn btn-primary btn-block">
                                <i class="bi bi-plus me-2"></i> Add Notes
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="alerts">
                        <div class="tab-pane-body">
                            <ul class="list-group list-group-flush">
                                <li class="px-0 list-group-item d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            Signed in with a different device.
                                        </p>
                                        <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            Your billing information is not active.
                                        </p>
                                        <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            Your subscription has expired.
                                        </p>
                                        <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                    </div>
                                </li>
                                <li class="px-0 list-group-item d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            Your storage space is running low
                                        </p>
                                        <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane-footer">
                            <a href="#" class="btn btn-success">
                                <i class="bi bi-check2 me-2"></i> Make All Read
                            </a>
                            <a href="#" class="btn btn-danger ms-2">
                                <i class="bi bi-trash me-2"></i> Delete all
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ notifications sidebar -->

        <!-- settings sidebar -->
        <div class="sidebar" id="settings">
            <div class="sidebar-header">
                <div>
                    <i class="bi bi-gear me-2"></i>
                    Settings
                </div>
                <button data-sidebar-close>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <div class="sidebar-content">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0 border-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                            <label class="form-check-label" for="flexCheckDefault1">
                                Remember next visits
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                            <label class="form-check-label" for="flexCheckDefault2">
                                Enable report generation.
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                            <label class="form-check-label" for="flexCheckDefault3">
                                Allow notifications.
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                            <label class="form-check-label" for="flexCheckDefault4">
                                Hide user requests
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                            <label class="form-check-label" for="flexCheckDefault5">
                                Speed up demands
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Hide menus
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-action">
                <a href="#" class="btn btn-primary">All Settings</a>
            </div>
        </div>
        <!-- ./ settings sidebar -->

        <!-- search sidebar -->
        <div class="sidebar" id="search">
            <div class="sidebar-header">
                Search
                <button data-sidebar-close>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <div class="sidebar-content">
                <form class="mb-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                        <button class="btn btn-outline-light" type="button" id="button-search-addon">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <h6 class="mb-3">Last searched</h6>
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                        </a>
                        <a href="#" class="flex-fill">Reports for 2021</a>
                        <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                        </a>
                        <a href="#" class="flex-fill">Current users</a>
                        <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                        </a>
                        <a href="#" class="flex-fill">Meeting notes</a>
                        <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                </div>
                <h6 class="mb-3">Recently viewed</h6>
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                        </a>
                        <a href="#" class="flex-fill">Todo list</a>
                        <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        </a>
                        <a href="#" class="flex-fill">Pricing table</a>
                        <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                        </a>
                        <a href="#" class="flex-fill">Settings</a>
                        <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        </a>
                        <a href="#" class="flex-fill">Users</a>
                        <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sidebar-action">
                <a href="#" class="btn btn-danger">All Clear</a>
            </div>
        </div>
        <!-- ./ search sidebar -->

        <!-- ./ sidebars -->

        <!-- menu -->
        <div class="menu">
            <div class="menu-header">
                <a href="./dashboard.html" class="menu-header-logo">

                    <span class="p-3">effect.rocks</span>
                </a>
                <a href="#" class="btn btn-sm menu-close-btn">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="menu-body">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                        <div class="avatar me-3">
                            <img src="../../../public/images/user/man_avatar5.jpg"
                                 class="rounded-circle" alt="image">
                        </div>
                        <div>
                            <div class="fw-bold">Claudinei A. Fernandes</div>
                            <small class="text-muted">Admin</small>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-person dropdown-item-icon"></i> Profile
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                            <i class="bi bi-gear dropdown-item-icon"></i> Settings
                        </a>
                        <a href="./login.html" class="dropdown-item d-flex align-items-center text-danger"
                           target="_blank">
                            <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                        </a>
                    </div>
                </div>
                <ul>
                    <li class="menu-divider">Dashboard</li>
                    <li>
                        <a  :href="route('dashboard')">
                    <span class="nav-link-icon">
                        <i class="bi bi-house"></i>
                    </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="{{ Route::is(
                                                'finishing.*',
                                                'inches.*',
                                                'category.*',
                                                'measuregroup.*',
                                                'acessorymaterial.*',
                                                'sku.*',
                                                'tag.*',
                                                'company.*',
                                                'feedstock.*',
                                                'environment.*',
                                                'product.*'
                                                ) ? 'active' : '' }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-folder-plus"></i>
                    </span>
                            <span>Cadastros</span>
                        </a>
                        <ul >

                            <li><Link :href="route('environment.index')" :class="{'active': $page.url === '/environment/list'}" ><i class="bi bi bi-layout-wtf zoom-icon"></i>&nbsp;Ambiente</Link></li>
                            <li><Link :href="route('finishing.index')" class="{{Route::is('finishing.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-bag zoom-icon"></i>&nbsp;Acabamento</Link></li>
                            <li><Link :href="route('inches.index')" class="{{Route::is('inches.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-rulers zoom-icon"></i>&nbsp;Polegadas</Link></li>
                            <li><Link :href="route('category.index')" class="{{Route::is('category.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-ui-radios-grid zoom-icon"></i>&nbsp;Categoria</Link></li>
                            <li><Link :href="route('measuregroup.index')" class="{{Route::is('measuregroup.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-file-ruled zoom-icon"></i>&nbsp;Grupo Medida</Link></li>
                            <li><Link :href="route('acessorymaterial.index')" class="{{Route::is('acessorymaterial.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-box-seam zoom-icon"></i>&nbsp;Material</Link></li>
                            <li><Link :href="route('feedstock.index')" class="{{Route::is('feedstock.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-box-arrow-in-down zoom-icon"></i>&nbsp;Matéria Prima</Link></li>
                            <li><Link :href="route('sku.index')" class="{{Route::is('sku.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-paint-bucket zoom-icon"></i>&nbsp;Cor Sku</Link></li>
                            <li><Link :href="route('field.index')" class="{{Route::is('field.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-ui-checks zoom-icon"></i>&nbsp;Inputs</Link></li>
                            <li><Link :href="route('tag.index')" class="{{Route::is('tag.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-tags zoom-icon"></i>&nbsp;Etiqueta</Link></li>
                            <li><Link :href="route('company.index')" class="{{Route::is('company.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-buildings zoom-icon"></i>&nbsp;Empresa</Link></li>
                            <li><Link :href="route('product.index')" class="{{Route::is('product.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-basket"></i>&nbsp;Produto</Link></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-send"></i>
                    </span>
                            <span>Concorrentes</span>
                        </a>
                        <ul>
                            <li>
                                <a  href="./orders.html">List</a>
                            </li>
                            <li>
                                <a  href="./order-detail.html">Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                            <span>Relatórios</span>
                        </a>
                        <ul>
                            <li>
                                <a  href="./product-list.html">List View</a>
                            </li>
                            <li>
                                <a  href="./product-grid.html">Grid View</a>
                            </li>
                            <li>
                                <a  href="./product-detail.html">Product Detail</a>
                            </li>
                            <li>
                                <a  href="./shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a  href="./checkout.html">Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-crosshair"></i>
                    </span>
                            <span>Comparativo</span>
                        </a>
                        <ul>
                            <li>
                                <a  href="./buyer-dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a  href="./buyer-orders.html">Orders</a>
                            </li>
                            <li>
                                <a  href="./buyer-addresses.html">Addresses</a>
                            </li>
                            <li>
                                <a  href="./buyer-wishlist.html">Wishlist</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="./customers.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-newspaper"></i>
                    </span>
                            <span>Noticias</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"  class="{{ Route::is('user.*') ? 'active' : '' }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-lock"></i>
                    </span>
                            <span>Administrativo</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('user.index')  }}" class="{{Route::is('user.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-person-badge zoom-icon"></i>&nbsp;Usuários</a>
                            </li>
                            <li>
                                <a href="{{ route('usertype.index')  }}" class="{{Route::is('user.*') ? 'submenu_ative' : ''}}" ><i class="bi bi-person-square zoom-icon"></i>&nbsp;Tipos de Usuários</a>
                            </li>
                            <li>
                                <a href="./invoice-detail.html" >Detail</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-divider">Apps</li>
                    <li>
                        <a  href="./chats.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-chat-square"></i>
                    </span>
                            <span>Chats</span>
                            <span class="badge bg-success rounded-circle ms-auto">2</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- ./  menu -->

        <!-- layout-wrapper -->
        <div class="layout-wrapper">

            <!-- header -->
            <div class="header">
                <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
                    <a href="#">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <!-- Logo -->
                <a href="./dashboard.html" class="logo">
                    <img width="100" src="../../../public/logo.svg" alt="logo">
                </a>
                <!-- ./ Logo -->
                <div class="page-title">{{title}}</div>

                <div class="header-bar ms-auto">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                                <i class="bi bi-bell icon-lg"></i>
                            </a>
                        </li>

                        <li class="nav-item ms-3">
                            <button class="btn btn-primary btn-icon">
                                <i class="bi bi-telegram"></i> Site
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- Header mobile buttons -->
                <div class="header-mobile-buttons">
                    <a href="#" class="search-bar-btn">
                        <i class="bi bi-search"></i>
                    </a>
                    <a href="#" class="actions-btn">
                        <i class="bi bi-three-dots"></i>
                    </a>
                </div>
                <!-- ./ Header mobile buttons -->
            </div>
            <!-- ./ header -->

            <!-- content -->
            <div class="content ">

                <slot />

            </div>
            <!-- ./ content -->

            <!-- content-footer -->
            <footer class="content-footer">
                <div><a href="https://cakeadmin.com" target="_blank">effect.rocks</a> © @php echo date('Y'); @endphp</div>
                <div>
                    <nav class="nav gap-4">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenças</a>
                        <a href="#" class="nav-link">Log</a>
                        <a href="#" class="nav-link">Ajuda</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ content-footer -->

        </div>
    </div>

</template>

<script>

import '../../../public/libs/jquery-3.7.1.min.js';
import '../../../public/libs/nicescroll.js';
import '../../../public/libs/charts/apex/apexcharts.min.js';
import '../../../public/libs/slick/slick.min.js';
import '../../../public/js/examples/dashboard.js';
import '../../../public/js/app.js';

import {Link} from "@inertiajs/vue3";

export default{
    props:{
        title: String
    },
    components:{
        Link
    }
}

</script>

<style>
@import 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap';
@import 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css';
@import '../../../public/libs/slick/slick.css';
@import '../../../public/css/app.css';
</style>
