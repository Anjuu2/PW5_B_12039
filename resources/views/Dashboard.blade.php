<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width-device-width, initial-scale=1.0">
        <title>PW5_B_12039</title>
        
        <style>
            .main-sidebar{
                background: linear-gradient(135deg, #2c3e50 0%, #4ca1af 100%);
            }

            .main-header{
                background-color: #ffffff;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }

            .nav-sidebar .nav-item .nav-link{
                border-radius: 10px;
                transition: background-color 0.3 ease;
            }

            .nav-sidebar .nav-item .nav-link:hover{
                background-color: rgba(255, 255, 255, 0.1);
            }

            .card{
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                transition: transform 0.3s ease-in-out;
            }

            .card:hover{
                transform: scale(1.02);
            }

            .modal-content{
                border-radius: 10px;
            }

            .modal-header{
                background-color: #3498db;
                color: white;
            }

            .btn-close{
                background-color: white;
            }

            .main-footer{
                background-color: #f8f9fa;
                border-top: 1px solid #dee2e6;
                padding: 10px;
                text-align: center;
            }
        </style>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="#" class="brand-link">
                    <img src="{{asset('img/primefit.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Primefit Indonesia</span>
                </a>

                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Petrus Juan Pradipta Raindarta</a>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-acccordion="false">
                            <li class="nav-item">
                                <a href="{{url('gyms/index')}}" class="nav-link">
                                    <i class="nav-icen fas fa-home"></i>
                                    <p>Home</p>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="content-wrapper">
                @yield('content')
            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline">
                    220712039
                </div>
                <strong>Copyright &copy; {{date('Y')}} <a href="#">Primefit</a>.</strong> All rights reserved.
            </footer>
        </div>

        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-C6RzsynM9kwDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script src="{{asset('js/adminlte.min.js')}}"></script>
    </body>
</html>