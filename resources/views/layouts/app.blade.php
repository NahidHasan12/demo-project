<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title> @yield('title') | eCommerce</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('admin') }}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin') }}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('admin') }}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('admin') }}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('admin') }}/css/theme.css" rel="stylesheet" media="all">

    @stack('styles')

    <style>
        .breadcrumb-nav li{
            display:inline-block;
        }
        .breadcrumb-nav li:first-child::before{
            padding: 0;
            content: '';
        }
        .breadcrumb-nav li::before{
            padding-right: .5rem;
            padding-left: .5rem;
            content: '/';
            color: rgb(150, 176, 150);
        }
        .breadcrumb-nav li.active a{
            color: rgb(81, 171, 250);
        }

        .table th{
            font-size:14px;
        }
        .table th:first-child,td:first-child{
            text-align: left;
            padding-left: 15px;
        }
        .table th:last-child,td:last-child{
            text-align: right;
            padding-right: 15px;
        }
    </style>

</head>

<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('admin.inc.phn_header')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('admin.inc.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('admin.inc.desk_header')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        {{-- Start Breadcrumb --}}
                          
                         @include('admin.inc.breadcrumb')

                        {{-- End Breadcrumb --}}

                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>




    <!-- Jquery JS-->
    <script src="{{ asset('admin') }}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin') }}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin') }}/vendor/slick/slick.min.js">
    </script>
    <script src="{{ asset('admin') }}/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/animsition/animsition.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{ asset('admin') }}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{ asset('admin') }}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin') }}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/select2/select2.min.js">
    </script>
    <script> 
       var _token = "{{ csrf_token() }}";
    </script>
    <!-- Main JS-->
    <script src="{{ asset('admin') }}/js/main.js"></script>

    @stack('scripts')

</body>

</html>
<!-- end document-->
