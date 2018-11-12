<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/chartist.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
</head>
<body data-col="2-columns" class=" 2-columns ">
<div id="app" class="wrapper">

@include('admin.partials.sidebar.left-sidebar')
<!-- Navbar (Header) Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent"
                                                                               href="javascript:;"
                                                                               class="open-navbar-container black"><i
                            class="ft-more-vertical"></i></a></span>
                <form role="search" class="navbar-form navbar-right mt-1">
                    <div class="position-relative has-icon-right">
                        <input type="text" placeholder="Search" class="form-control round"/>
                        <div class="form-control-position"><i class="ft-search"></i></div>
                    </div>
                </form>
            </div>
            <div class="navbar-container">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;"
                                                                       class="nav-link apptogglefullscreen"><i
                                    class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">fullscreen</p></a></li>
                        <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                                         class="nav-link position-relative dropdown-toggle"><i
                                    class="ft-flag font-medium-3 blue-grey darken-4"></i><span
                                    class="selected-language d-none"></span></a>
                            <div class="dropdown-menu dropdown-menu-right text-left"><a href="javascript:;"
                                                                                        class="dropdown-item py-1"><img
                                        src="../app-assets/img/flags/us.png"
                                        class="langimg"/><span> English</span></a><a href="javascript:;"
                                                                                     class="dropdown-item py-1"><img
                                        src="../app-assets/img/flags/es.png"
                                        class="langimg"/><span> Spanish</span></a><a href="javascript:;"
                                                                                     class="dropdown-item py-1"><img
                                        src="../app-assets/img/flags/br.png"
                                        class="langimg"/><span> Portuguese</span></a><a href="javascript:;"
                                                                                        class="dropdown-item"><img
                                        src="../app-assets/img/flags/de.png" class="langimg"/><span> French</span></a>
                            </div>
                        </li>
                        <li class="dropdown nav-item"><a id="dropdownBasic2" href="#" data-toggle="dropdown"
                                                         class="nav-link position-relative dropdown-toggle"><i
                                    class="ft-bell font-medium-3 blue-grey darken-4"></i><span
                                    class="notification badge badge-pill badge-danger">4</span>
                                <p class="d-none">Notifications</p></a>
                            <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                                <div class="noti-list"><a
                                        class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i
                                            class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i><span
                                            class="noti-wrapper"><span
                                                class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span><span
                                                class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span></span></a><a
                                        class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i
                                            class="ft-bell warning float-left d-block font-large-1 mt-1 mr-2"></i><span
                                            class="noti-wrapper"><span
                                                class="noti-title line-height-1 d-block text-bold-400 warning">New User Registered</span><span
                                                class="noti-text">Lorem ipsum dolor sit ametitaque in </span></span></a><a
                                        class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i
                                            class="ft-bell danger float-left d-block font-large-1 mt-1 mr-2"></i><span
                                            class="noti-wrapper"><span
                                                class="noti-title line-height-1 d-block text-bold-400 danger">New Order Received</span><span
                                                class="noti-text">Lorem ipsum dolor sit ametest?</span></span></a><a
                                        class="dropdown-item noti-container py-3"><i
                                            class="ft-bell success float-left d-block font-large-1 mt-1 mr-2"></i><span
                                            class="noti-wrapper"><span
                                                class="noti-title line-height-1 d-block text-bold-400 success">New User Registered</span><span
                                                class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a>
                                </div>
                                <a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read
                                    All Notifications</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                                         class="nav-link position-relative dropdown-toggle"><i
                                    class="ft-user font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">User Settings</p></a>
                            <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3"
                                 class="dropdown-menu text-left dropdown-menu-right"><a href="javascript:;"
                                                                                        class="dropdown-item py-1"><i
                                        class="ft-settings mr-2"></i><span>Settings</span></a><a href="javascript:;"
                                                                                                 class="dropdown-item py-1"><i
                                        class="ft-edit mr-2"></i><span>Edit Profile</span></a><a href="javascript:;"
                                                                                                 class="dropdown-item py-1"><i
                                        class="ft-mail mr-2"></i><span>My Inbox</span></a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:;" class="dropdown-item"><i
                                        class="ft-power mr-2"></i><span>Logout</span></a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a href="javascript:;"
                                                                  class="nav-link position-relative notification-sidebar-toggle"><i
                                    class="ft-align-left font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">Notifications Sidebar</p></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{--<li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>--}}
    {{--<li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>--}}

    {{--<li class="nav-item dropdown">--}}
    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
    {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--</a>--}}

    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--onclick="event.preventDefault();--}}
    {{--document.getElementById('logout-form').submit();">--}}
    {{--{{ __('Logout') }}--}}
    {{--</a>--}}

    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
    {{--style="display: none;">--}}
    {{--@csrf--}}
    {{--</form>--}}
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">

                @if ($message = Session::get('success'))

                    <div class="alert lert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p>{{ $message }}</p>
                    </div>
                @endif


                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>
        </div>
    </div>
</div>

@section('js')
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN APEX JS-->
    <script src="{{asset('app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>
    {{--End APEX JS--}}
@show
</body>
</html>
