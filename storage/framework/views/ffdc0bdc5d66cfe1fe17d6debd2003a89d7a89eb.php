<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Styles -->
    <?php echo \Livewire\Livewire::styles(); ?>


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

<body class="font-sans antialiased">
    

    <div class="">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('1Hk4jfG')) {
    $componentId = $_instance->getRenderedChildComponentId('1Hk4jfG');
    $componentTag = $_instance->getRenderedChildComponentTagName('1Hk4jfG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1Hk4jfG');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('1Hk4jfG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        
        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>

    <?php echo $__env->yieldPushContent('modals'); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html><?php /**PATH C:\Laravel_project\finalProject\resources\views/layouts/app.blade.php ENDPATH**/ ?>