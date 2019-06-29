<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('dashboard/pace.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
    <!-- CSS -->
    <link href="{{ asset('dashboard/material-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/monosocialiconsfont.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/weather-icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/weather-icons-wind.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/style.css') }}" rel="stylesheet" type="text/css">
    @yield('style')
    <!-- Head Libs -->
</head>

<body class="header-light sidebar-dark sidebar-expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <img class="logo-expand" alt="" src="{{ asset('dashboard/logo-expand.png') }}">
                    <img class="logo-collapse" alt="" src="{{ asset('dashboard/logo-collapse.png') }}">
                    <!-- <p>OSCAR</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search hidden-xs-down" role="search"><i class="material-icons list-icon">search</i> 
                <input type="text" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="material-icons">clear</i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Button: Create New -->
            <!-- /.btn-list -->
            <!-- Right Menu -->
            <ul class="nav navbar-nav hidden-sm-down">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">mail_outline</i> <span class="badge badge-border bg-primary">3</span></a>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"><a href="index.html#" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">event_available</i> <span class="badge badge-border bg-primary">9</span></a>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"><i class="material-icons list-icon">comment</i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="{{ asset('dashboard/LBWH5513.JPEG') }}" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
                </li>
            </ul>
    <!-- /.navbar-right -->
        </nav>
    <!-- /.navbar -->
    <div class="content-wrapper" style="background-color: none;">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled clearfix">
            <!-- User Details -->
            <div class="side-user">
                <a class="col-sm-12 media clearfix" href="javascript:void(0);">
                    <figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
                        <img src="{{ asset('dashboard/LBWH5513.JPEG') }}" class="media-object rounded-circle" alt="">
                    </figure>
                    <div class="media-body hide-menu">
                        <h4 class="media-heading mr-b-5 text-uppercase">Thanh Bình</h4>
                    </div>
                </a>
                <div class="clearfix"></div>
               
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page menu-item-has-children"><a href="{{route('admin.product')}}" class="ripple"><i class="fa fa-bars" aria-hidden="true"></i> <span class="hide-menu">Products</span></a>
                    </li>

                    <li class="current-page menu-item-has-children"><a href="{{route('admin.color')}}" class="ripple"><i class="fa fa-bars" aria-hidden="true"></i> <span class="hide-menu">Colors</span></a>
                    </li>
                    <li class="current-page menu-item-has-children"><a href="{{route('admin.bill')}}" class="ripple"><i class="fa fa-bars" aria-hidden="true"></i> <span class="hide-menu">Bill</span></a>
                    </li>
                    <li><a href="{{route('admin.logout')}}"><i class="list-icon material-icons">settings_power</i> <span class="hide-menu">Log Out</span></a>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        
        <!-- <main class=" clearfix">
        </main> -->
        <section class="content main-wrapper">
            <div class="container-fluid" style="height: auto;width: 100%">
                @yield('content')
            </div>
        </section>
        <!-- /.main-wrappper -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer text-center clearfix">2019 © Thanh Binh</footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('css/bootstrap.min.js') }}"></script>
    
    @yield('script')
</body>

</html>
