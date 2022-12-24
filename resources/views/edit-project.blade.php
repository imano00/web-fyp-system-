<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/css/templatemo-style.css">
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

        <x-app-layout>
        </x-app-layout>

        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>{{ Auth::user()->name}}</b></p>
                </div>
                @if(Auth::user()->usertype == 1)
                <button type="button" class="btn btn-primary m-4"><i class="fas fa-list-ul mr-2"></i><a
                        href="{{ url('/add') }}" style="color: white">
                        Add Project</a></button>
                @endif

                <button type="button" class="btn btn-primary m-4"><i class="fas fa-list-ul mr-2"></i><a
                        href="{{ url('/list') }}" style="color: white">
                        Project List</a></button>

            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-12">
                    <div class="">
                        <h2 class="tm-block-title">Projects Detail</h2>
                        <form method="post" action="/edit">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <div class="form-group">
                                        <label for="id">Project ID</label>
                                        <input type="number" class="form-control text-dark" placeholder="Key in ID"
                                            aria-label="id" id="id" style="background-color: white" name="id"
                                            value="{{$findProject['id']}}" aria-describedby="basic-addon1" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Project Title</label>
                                        <input type="text" class="form-control text-dark"
                                            placeholder="Key in project title" aria-label="title" name="title"
                                            value="{{$findProject['title']}}" style="background-color: white" id="title"
                                            aria-describedby="basic-addon1" {{(Auth::user()->usertype == 3 ? 'readonly'
                                        : '')}}>
                                    </div>

                                    <div class="form-group">
                                        <label for="id">Project Start Date</label>
                                        <input type="date" class="form-control text-dark"
                                            placeholder="Key in start date" aria-label="start-date"
                                            value="{{$findProject['start_date']}}" style="background-color: white"
                                            id="start-date" name="start_date" aria-describedby="basic-addon1"
                                            {{(Auth::user()->usertype == 3 ? 'readonly' : '')}}>
                                    </div>

                                    <div class="form-group">
                                        <label for="id">Project End Date</label>
                                        <input type="date" class="form-control text-dark" placeholder="Key in end date"
                                            value="{{$findProject['end_date']}}" aria-label="end-date"
                                            style="background-color: white" id="end-date" name="end_date"
                                            aria-describedby="basic-addon1" {{(Auth::user()->usertype == 3 ? 'readonly'
                                        : '')}}>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="duration">Duration</label>
                                        <input type="number" class="form-control text-dark"
                                            placeholder="Key in duration (month)" aria-label="duration"
                                            value="{{$findProject['duration']}}" style="background-color: white"
                                            id="duration" name="duration" aria-describedby="basic-addon1"
                                            {{(Auth::user()->usertype == 3 ? 'readonly' : '')}}>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="progress">Project Progress</label>
                                        <select id="progress" class="form-control text-dark text-align-center"
                                            style="height: 10%; background-color: white"
                                            value="{{$findProject['progress']}}" name="progress"
                                            {{(Auth::user()->usertype == 3 ? 'disabled' : '')}}
                                            style="background-color: white">
                                            <option>Choose...</option>
                                            <option {{$findProject['progress']=='Milestone 1' ? 'selected' : '' }}>
                                                Milestone 1</option>
                                            <option {{$findProject['progress']=='Milestone 2' ? 'selected' : '' }}>
                                                Milestone 2</option>
                                            <option {{$findProject['progress']=='Final Report' ? 'selected' : '' }}>
                                                Final
                                                Report</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="status"> Project Status</label>
                                        <select id="status" class="form-control text-dark" name="status"
                                            style="height: 10%; background-color: white" style="background-color: white"
                                            {{(Auth::user()->usertype == 3 ? 'disabled' : '')}}>
                                            <option {{$findProject['status']=="On track" ? 'selected' : '' }}>On track
                                            </option>
                                            <option {{$findProject['status']=="Delayed" ? 'selected' : '' }}>Delayed
                                            </option>
                                            <option {{$findProject['status']=="Extended" ? 'selected' : '' }}>Extended
                                            </option>
                                            <option {{$findProject['status']=="Completed" ? 'selected' : '' }}>
                                                Completed</option>
                                            <option>Choose...</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="assigned-to">Student Name</label>
                                        <input type="text" class="form-control text-dark"
                                            placeholder="Key in student name" aria-label="assigned-to"
                                            value="{{$findProject['assigned_to']}}" style="background-color: white"
                                            id="assigned-to" name="assigned_to" aria-describedby="basic-addon1"
                                            {{(Auth::user()->usertype == 3 ? 'readonly' : '')}}>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="supervised-by">Supervisor Name</label>
                                        <input type="text" class="form-control text-dark"
                                            placeholder="Key in supervisor name" aria-label="supervised-by"
                                            value="{{$findProject['supervised_by']}}" style="background-color: white"
                                            id="supervised-by" name="supervised_by" aria-describedby="basic-addon1"
                                            {{(Auth::user()->usertype == 3 ? 'readonly' : '')}}>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="examined-by1">Examiner 1 Name</label>
                                        <input type="text" class="form-control text-dark"
                                            placeholder="Key in examiner name" aria-label="examined-by1"
                                            value="{{$findProject['examined_by1']}}" style="background-color: white"
                                            id="examined-by1" name="examined_by1" aria-describedby="basic-addon1"
                                            {{(Auth::user()->usertype == 3 ? 'readonly' : '')}}>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="examined-by1">Examiner 2 Name</label>
                                        <input type="text" class="form-control text-dark"
                                            placeholder="Key in examiner name" aria-label="examined-by2"
                                            value="{{$findProject['examined_by2']}}" style="background-color: white"
                                            id="examined-by2" name="examined_by2" aria-describedby="basic-addon1"
                                            {{(Auth::user()->usertype == 3 ? 'readonly' : '')}}>
                                    </div>
                                </div>
                                @if(Auth::user()->usertype != 3)
                                <button type="submit" class="btn btn-primary m-4"><i
                                        class="fas fa-upload mr-2"></i>Update
                                    Project</button>
                                </button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
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