<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NicRobotics</title>
    <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard_files/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard_files/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="{{asset('jquery-3.5.0.min.js')}}"></script>

</head>
<style>
    .navy {
        background-color: #1f2738 !important;
    }
    .upperCase{
        text-transform: uppercase;
    }
    .sidebar-brand {
        margin-top: 30px;
    }
    .sidebar-brand-text{
        margin-top: 20px;
        margin-left: 5px;
        font-size: 17px;
    }
    .h-100 {
        height: 100%;
        margin: 0 !important;
    }
    .first-link {
        margin-top: 10px;
    }
    input[type=text],
    input[type=date] {
        border: none;
        background: transparent;
        border-radius: 0;
        border-bottom: 2px solid rgb(209, 207, 207) !important;
    }
    input[type=text]:focus {
        border-top-style: none !important;
        border-left-style: none !important;
        border-right-style: none !important;
        outline: none !important;
    }
    label{
        color: #fff;
    }
    input[type=submit] {
        background-color: rgb(59, 59, 189) !important;
        color: #fff;
        width: 140px;
        border: none;
        font-weight: bold;
    }

    textarea {
        background: transparent !important;
        border: none !important;
        border-radius: 0 !important;
        border-bottom: 1px solid rgb(209, 207, 207) !important;
    }

    .top-p {
        font-size: 30px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
    }

    .formEmail {
        margin-top: 50px;
    }

    .browsers {
        width: 100%;
        padding-top: 40px;
    }

    .computer {
        color: #fff;
        margin-top: 10px;
        margin-top: 5px;
    }

    .browserItem {
        width: 100%;
        height: 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 7px;
        background-color: black;
    }

    .opera {
        visibility: hidden;
    }

    .browserText {
        height: 100%;
        width: 70%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        padding: 1px;
    }

    .browserText p:nth-child(1) {
        margin-top: 16px;
    }

    .browserText p {
        line-height: 2px;

    }

    .browserImg {
        width: 40%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .google {
        background-color: #000;
        width: 100% !important;
        border-radius: 7px;
    }

    .google img {
        width: 70%;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav navy sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex  align-items-center justify-content-center" href="{{route('home')}}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('images/logo2.png') }}" width="70" height="70" alt="">
                </div>
                <div class="sidebar-brand-text">
                    <p style="font-size: 10px;">NicRobotics</p>
                </div>
            </a>
            <li class="nav-item active first-link">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>PROFILE</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('referral')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>REFERRALS</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('download') }}">
                    <i class="fas fa-fw fa-download"></i>
                    <span>DOWNLOAD</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>SETTINGS</span>
                </a>
                <div id="collapseUtilities" class="collapse">
                    <div class="bg-white py-2 collapse-inner">
                        <a class="collapse-item active" href="{{ route('updateInfo') }}">PROFILE IMAGE | EMAIL</a>
                    </div>
                    <div class="bg-white py-2 collapse-inner">
                        <a class="collapse-item active" href="{{ route('changePassword') }}">CHANGE PASSWORD</a>
                    </div>

                </div>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>LOG OUT</span></a>
            </li>

            <!-- Divider -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light navy topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (empty(auth()->user()->firstname))
                                    <span
                                        class="upperCase mr-2 d-none d-lg-inline text-light font-weight-bold small">{{ auth()->user()->email }}
                                    </span>
                                @else
                                    <span
                                        class="upperCase mr-2 d-none d-lg-inline text-light font-weight-bold small">{{ auth()->user()->firstname }}
                                        {{ auth()->user()->lastname }}
                                    </span>
                                @endif
                                @if (empty(auth()->user()->avatar))
                                    <img class="rounded-circle" src="{{ asset('userImages/138139.png') }}" width="60"
                                        height="60" alt="">
                                @else
                                    <img class="avatarImg rounded-circle"
                                        src="{{ asset('userImages') }}/{{ auth()->user()->avatar }}" width="60"
                                        height="60" class="img-fluid" alt="User Image">
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in bg-light"
                                aria-labelledby="userDropdown">
                                <form action="{{route('logout')}}" >
                                    @csrf
                                    <button type="submit" class="btn btn-light w-100">Logout</button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid h-100">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
</body>

</html>
