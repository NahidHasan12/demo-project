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
    <!-- Datatables CSS-->
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">

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
            font-weight: 600 !important;
        }
        .table th:first-child,
        .table tr td:first-child{
            text-align: left;
            padding-left: 15px;
        }
        .table th:last-child,
        .table tr td:last-child{
            text-align: right;
            padding-right: 15px;
        }
        .pr-15{
            padding-right: 15px;
        }
        .dataTables_length,
        .dataTables_info{
            padding-left: 15px
        }
        /* btn style */
        .action-btn .btn-style{
            margin-left: 4px;
        }

        .btn-style {
            text-align: center;
            width: 25px;
            height: 26px;
            line-height: 15px;
            cursor: pointer;
            border: 0;
            border-radius: 50%;
            font-size: 15px;
            display: inline-block;
            padding: 6px;
            transition: .5s ease-in-out;
        }

        .btn-style-delete{
            background: rgba(239,72,106,.15);
            color: #ff5370;
        }
        .btn-style-delete:hover {
            background: #ff5370;
            color: #fff;
        }

        .btn-style-edit{
            background: rgba(55,125,255,.15);
            color: #377dff;
        }
        .btn-style-edit:hover {
            background: #377dff;
            color: #fff;
        }

        .btn-style-view{
            background: rgba(23, 162, 184, .15);
            color: #17a2b8;
        }
        .btn-style-view:hover {
            background: #17a2b8;
            color: #fff;
        }

        .btn-style-clone{
            background: rgba(255, 193, 7, .25);
            color: #ffc107;
        }
        .btn-style-clone:hover {
            background: #ffc107;
            color: #fff;
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



 <!-- CORE PLUGINS-->
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> --}}
    <!-- Jquery JS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Jquery JS-->
    <script src="{{ asset('admin') }}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin') }}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin') }}/vendor/slick/slick.min.js"> </script>
    <script src="{{ asset('admin') }}/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/animsition/animsition.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin') }}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/select2/select2.min.js"></script>

    <!-- DataTables-->
   <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

    <script> 
       var _token = "{{ csrf_token() }}";
    </script>
    <!-- Main JS-->
    <script src="{{ asset('admin') }}/js/main.js"></script>

    @stack('scripts')


 <script>
        var table; // role er index er table ata

        function datetable(row_id,url){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: "post",
                        data:{_token:_token,row_id:row_id},
                        success: function (response) {
                            if (response.status =='success') {
                                table.reload();
                                $('.alert-message').append('<div class="alert alert-success py-2">'+response.message+'</div>');
                                
                            }
                        }
                    });
                }
            })
        }


    </script>



</body>

</html>
<!-- end document-->
