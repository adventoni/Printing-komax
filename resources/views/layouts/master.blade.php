<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KOMAX | 2018</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    {{-- <link href="/css/compiled.min.css" rel="stylesheet"> --}}
    <link href="/css/style.css" rel="stylesheet">
</head>

<body class="fixed-sn white-skin" >

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav" style="transform: translateX(0%);">
                <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
                    <!-- Logo -->
                    <li>
                        <div class="logo-wrapper waves-effect waves-light">
                            <a href="#"><img src="img/logo/logo.PNG" class="img-fluid flex-center"></a>
                        </div>
                    </li>
                    <!--/. Logo -->
                    <!--Search Form-->
                    <li>
                        <form class="search-form" role="search">
                                    <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                                        <input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </form>
                    </li>
                    <!--/.Search Form-->
                    <!-- Side navigation links -->
                    <li>
                        <ul class="collapsible collapsible-accordion">
                            <li class=""><a class="collapsible-header waves-effect" href="/home-admin"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>

                            </li>
                            <li class=""><a class="collapsible-header waves-effect" href="/report"><i class="fa fa-file" aria-hidden="true"></i></i> File - Report</a>
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-file" aria-hidden="true"></i></i> File - Import<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="/barkode-jepang" class="waves-effect">
                                                <i class="fa fa-barcode" aria-hidden="true"></i>
                                                Barkode Jepang - PM32</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-print" aria-hidden="true"></i> Transaction<i class="fa fa-angle-down rotate-icon"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="/buyer" class="waves-effect"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add Buyer</a>
                                        </li>
                                        <li><a href="/bucomp" class="waves-effect"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add Bucomp</a>
                                        </li>
                                        <li><a href="/company" class="waves-effect"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add Company</a>
                                        </li>
                                        <li><a href="/country" class="waves-effect"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add Country</a>
                                        </li>
                                        <li><a href="/item" class="waves-effect"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add Item</a>
                                        </li>
                                        <li><a href="/member" class="waves-effect"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add Member</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=""><a class="collapsible-header waves-effect" href="#"><i class="fa fa-wrench" aria-hidden="true"></i></i> Setting</a>
                        </ul>
                    </li>
                    <!--/. Side navigation links -->
                </ul>
                <div class="sidenav-bg mask-strong"></div>
                <nav class="navbar fixed-bottom navbar-dark indigo lighten-5">
                        <p>KOMAX INDONESIA &copy; 2018 </p>
                      </nav>
            </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav  indigo darken-4">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p><font color="white" size="6"><b>KOMAX INDONESIA</b></font></p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item dropdown white-text">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle-o white-text fa-2x" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item waves-effect waves-light" href="#"><i class="fa fa-user-o"></i> User Profil</a>
                                <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 <i class="fa fa-sign-out" aria-hidden="true"></i></i> {{ __('Logout') }}</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
            </ul>
        </nav>
        
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main Layout-->
    <main>
        <div class="container-fluid mt-5">
            @yield('content')
        </div>
    </main><br><br>
    <!--Main Layout-->

<!--/. Sidebar navigation -->
    
    <!-- /Start your project here-->
                      
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script>
    // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    Ps.initialize(sideNavScrollbar);
    </script>
   <script type="text/javascript" src="/js/jquery-1.12.4.js"></script>
   <script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="/js/dataTables.bootstrap4.min.js"></script>
   <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );      
    </script>

</body>

</html>
