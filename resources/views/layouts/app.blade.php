<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <title>Sign In | Larkon - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="" content="" />
    <meta name="" content="" />
    <meta http-equiv="" content="" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('adminassets/assets/images/favicon.ico')}}">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{asset('adminassets/assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{asset('adminassets/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{asset('adminassets/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{asset('adminassets/assets/js/config.js')}}"></script>
</head>

<body class="h-100">
    <div class="d-flex flex-column h-100 p-3">
        <div class="d-flex flex-column flex-grow-1">
            <div class="row h-100">
                <div class="col-xxl-7">
                    <div class="row justify-content-center h-100">
                        <div class="col-lg-6 py-lg-5">
                            <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-4">
                                    <a href="" class="logo-dark">
                                        <img src="{{asset('adminassets/assets/images/logo-dark.png')}}" height="24"
                                            alt="logo dark" style="width: 30%; height: 0%;">
                                    </a>

                                    <a href="" class="logo-light">
                                        <img src="{{asset('adminassets/assets/images/logo-light.png')}}" height="24"
                                            alt="logo light">
                                    </a>
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 d-none d-xxl-flex">
                    <div class="card h-100 mb-0 overflow-hidden">
                        <div class="d-flex flex-column h-100">
                            <img src="{{asset('adminassets/assets/images/small/img-10.jpg')}}" alt=""
                                class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{asset('adminassets/assets/js/vendor.js')}}"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{asset('adminassets/assets/js/app.js')}}"></script>

</body>

</html>