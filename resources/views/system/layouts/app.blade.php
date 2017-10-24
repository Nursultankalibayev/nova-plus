<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Администрация</title>
    @include('system.layouts.styles')
    @stack('styles')
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Поиск..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{\Auth::user()->name}}</b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="/plugins/images/users/varun.jpg" alt="user" /></div>
                                <div class="u-text">
                                    <h4>{{\Auth::user()->name}}</h4>
                                    <p class="text-muted">{{\Auth::user()->email}}</p></div>
                            </div>
                        </li>
                        <li><a href="/system/logout"><i class="fa fa-power-off"></i> Выйти</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation" style="    margin-top: 60px;">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
            @include('system.layouts.menu')
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@include('system.layouts.scripts')
@stack('scripts')
</body>

</html>
