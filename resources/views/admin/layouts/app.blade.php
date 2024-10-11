<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{env('app_name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="" content="" />
    <meta name="" content="" />
    <meta http-equiv="" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('adminassets/assets/images/favicon.ico')}}">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{asset('adminassets/assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{asset('adminassets/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{asset('adminassets/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminassets/assets/css/custom.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{asset('adminassets/assets/js/config.js')}}"></script>
    <script>
    var base_path = "{{url('/')}}";
    </script>
</head>

<body>
    <!-- START Wrapper -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
        <header class="topbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="d-flex align-items-center">
                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <button type="button" class="button-toggle-menu me-2">
                                <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle">
                                </iconify-icon>
                            </button>
                        </div>

                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Welcome!</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-1">
                        @include('admin.flash-message')
                        <!-- Theme Color (Light/Dark) -->
                        <div class="topbar-item">
                            <button type="button" class="topbar-button" id="light-dark-mode">
                                <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                        <!-- User -->
                        <div class="dropdown topbar-item">
                            <a type="button" class="topbar-button" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle" width="32"
                                        src="{{asset('adminassets/assets/images/users/avatar-1.jpg')}}" alt="avatar-3">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Gaston!</h6>
                                <a class="dropdown-item" href="">
                                    <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Profile</span>
                                </a>

                                <div class="dropdown-divider my-1"></div>

                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bx bx-log-out fs-18 align-middle me-1"></i><span
                                        class="align-middle">Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- ========== Topbar End ========== -->

        <!-- ========== App Menu Start ========== -->
        <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="{{route('admin.home')}}" class="logo-dark">
                    <img src="{{asset('adminassets/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                    <img style="width: 50%; height: 50%;" src="{{asset('adminassets/assets/images/logo-dark.png')}}"
                        class="logo-lg" alt="logo dark">
                </a>

                <a href="{{route('admin.home')}}" class="logo-light">
                    <img src="{{asset('adminassets/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                    <img style="width: 50%; height: 50%;" src="{{asset('adminassets/assets/images/logo-light.png')}}"
                        class="logo-lg" alt="logo light">
                </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon">
                </iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title">General</li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.home')}}">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProducts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Project Management</span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('admin.project.list')}}">Projects</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('admin.sector.list')}}">Sectors</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('admin.location.list')}}">Locations</a>
                                </li>
                               
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCategory">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Category </span>
                        </a>
                        <div class="collapse" id="sidebarCategory">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-list.html">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-edit.html">Edit</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-add.html">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarInventory">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Inventory </span>
                        </a>
                        <div class="collapse" id="sidebarInventory">
                            <ul class="nav sub-navbar-nav">

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="inventory-warehouse.html">Warehouse</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="inventory-received-orders.html">Received Orders</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Orders </span>
                        </a>
                        <div class="collapse" id="sidebarOrders">
                            <ul class="nav sub-navbar-nav">

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="orders-list.html">List</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="order-detail.html">Details</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="order-cart.html">Cart</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="order-checkout.html">Check Out</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== App Menu End ========== -->

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            @yield('content')

            <!-- ========== Footer Start ========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> &copy; Padams. Crafted by <iconify-icon icon="iconamoon:heart-duotone"
                                class="fs-18 align-middle text-danger"></iconify-icon> <a href="#"
                                class="fw-bold footer-text" target="_blank">Padams</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ========== Footer End ========== -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{asset('adminassets/assets/js/vendor.js')}}"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{asset('adminassets/assets/js/app.js')}}"></script>

    <!-- Vector Map Js -->
    <script src="{{asset('adminassets/assets/vendor/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/vendor/jsvectormap/maps/world-merc.js')}}"></script>
    <script src="{{asset('adminassets/assets/vendor/jsvectormap/maps/world.js')}}"></script>

    <!-- Dashboard Js -->
    <script src="{{asset('adminassets/assets/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/custom.js')}}"></script>

</body>

</html>