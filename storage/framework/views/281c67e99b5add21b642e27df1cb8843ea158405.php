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
    <div class="ml-0 pl-0" id="home">
        <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
        <div class="container">
            <div class="row">

                <p class="text-white mt-5 mb-5">Welcome back, <b><?php echo e((Auth::user()->name)); ?></b></p>

                <?php if(Auth::user()->usertype == 1): ?>
                <button type="button" class="btn btn-primary m-4"><i class="fas fa-plus mr-2"></i><a
                        href="<?php echo e(url('/add')); ?>" style="color: white">
                        Add Project</a></button>
                <?php endif; ?>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-12">
                    <div class="">
                        <h2 class="tm-block-title">Projects List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="vertical-align: center; text-align: center">ID</th>
                                    <th scope="col" style="text-align: center">TITLE</th>
                                    <th scope="col" style="text-align: center">START DATE</th>
                                    <th scope="col" style="text-align: center">END DATE</th>
                                    <th scope="col" style="text-align: center">DURATION</th>
                                    <th scope="col" style="text-align: center">PROGRESS</th>
                                    <th scope="col" style="text-align: center">STATUS</th>
                                    <th scope="col" style="text-align: center">ASSIGNED TO</th>
                                    <th scope="col" style="text-align: center">SUPERVISED BY</th>
                                    <th scope="col" style="text-align: center">EXAMINED BY 1</th>
                                    <th scope="col" style="text-align: center">EXAMINED BY 2</th>
                                    <th scope="col" style="text-align: center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td><b><?php echo e($display['id']); ?></b></td>
                                    <td><b><?php echo e($display['title']); ?></b></td>
                                    <td><?php echo e($display['start_date']); ?></td>
                                    <td><?php echo e($display['end_date']); ?></td>
                                    <td><b><?php echo e($display['duration']); ?></b></td>
                                    <td><b><?php echo e($display['progress']); ?></b></td>

                                    <?php if($display->status == 'On track'): ?>
                                    <td>
                                        <div class="badge badge-pill badge-info"><?php echo e($display['status']); ?></div>
                                    </td>
                                    <?php elseif($display->status == 'Delayed'): ?>
                                    <td>
                                        <div class="badge badge-pill badge-danger"><?php echo e($display['status']); ?></div>
                                    </td>
                                    <?php elseif($display->status == 'Extended'): ?>
                                    <td>
                                        <div class="badge badge-pill badge-warning"><?php echo e($display['status']); ?></div>
                                    </td>
                                    <?php elseif($display->status == 'Completed'): ?>
                                    <td>
                                        <div class="badge badge-pill badge-success"><?php echo e($display['status']); ?></div>
                                    </td>
                                    <?php endif; ?>

                                    <td><b><?php echo e($display['assigned_to']); ?></b></td>
                                    <td><b><?php echo e($display['supervised_by']); ?></b></td>
                                    <td><b><?php echo e($display['examined_by1']); ?></b></td>
                                    <td><b><?php echo e($display['examined_by2']); ?></b></td>
                                    
                                    <td>
                                        <?php if(Auth::user()->usertype == 1): ?>
                                        <button type="button" class="btn btn-primary m-4"><a style="color: white"
                                                href=<?php echo e("del/".$display['id']); ?>>Delete</a></button>
                                        <?php endif; ?>


                                        <button type="button" class="btn btn-primary m-4"><a style="color: white"
                                                href=<?php echo e("search/".$display['id']); ?>><?php echo e((Auth::user()->usertype == 3 ?
                                                'View' :
                                                'Update')); ?></a></button>

                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        
                        <div class="d-inline-flex">
                            <div class="d-flex justify-content-center card mt-5" style="width: auto">
                                <span class="mt-3 ml-3 mr-3 d-flex justify-content-center"
                                    style="background-color: white">
                                    <?php echo e($data->links()); ?>

                                </span>
                            </div>
                        </div>
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

</html><?php /**PATH C:\Laravel_project\finalProject\resources\views/project-list.blade.php ENDPATH**/ ?>