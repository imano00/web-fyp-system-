<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
    <style>
        .w-5 {
            display: none
        }
    </style>
</head>

<body id="reportsPage">
    <div class="" id="home">

        <nav class="bg-black border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                {{--
                                <x-jet-application-mark class="block h-9 w-auto" /> --}}
                            </a>
                        </div>

                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                                style="color: white">
                                <img class="mr-5 mt-5" style="width: 5%; height: auto"
                                    src="{{ asset('img/Weblogo.png') }}" alt="description of myimage">
                                {{ __('FYP System') }}
                            </x-jet-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </nav>



        <div class="row d-flex justify-content-center">

            {{-- <div class="col">
                <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
            </div> --}}
            {{-- <a href="{{ url('add') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            --}}
            <div class="card m-5 text-center" style="width: 30%; height: 50%">
                <h4 class="m-4">Welcome to FYP System</h4>
                <h5>Click button below to start</h5>
                @if (Route::has('login'))

                <div class="hidden fixed top-0 right-0 py-4 sm:block">
                    @auth

                    <button type="button" class="btn btn-primary m-4">
                        <a style="color: white" href="{{ url('/dashboard') }}">Dashboard</a>
                    </button>

                    @else

                    <button type="button" class="btn btn-primary m-4">
                        <a style="color: white" href="{{ route('login') }}">Log
                            in</a>
                    </button>


                    @if (Route::has('register'))

                    <button type="button" class="btn btn-primary m-4">
                        <a style="color: white" href="{{ route('register') }}">Register</a>
                    </button>

                    @endif
                    @endauth
                </div>

                @endif
            </div>
        </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2018</b> All rights reserved.

                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template
                        Mo</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>