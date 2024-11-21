<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['breadcrumb' => []]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['breadcrumb' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Fonts Awesome -->
    <script src="https://kit.fontawesome.com/27a9fd3a86.js" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Chart Js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Styles -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body class="font-sans antialiased sm:overflow-auto" :class="{ 'overflow-hidden': open }" x-data="{ open: false, }">

    <?php echo $__env->make('layouts.includes.admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.includes.admin.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="p-4 sm:ml-64">
        <div class="mt-14 -mb-10 flex justify-between items-center">
            <?php echo $__env->make('layouts.includes.admin.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if(isset($action)): ?>
                <?php echo e($action); ?>

            <?php endif; ?>
        </div>


        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <?php echo e($slot); ?>

        </div>
    </div>

    <div x-show="open" x-on:click="open = false" style="display:none"
        class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-30 md:hidden"></div>
    <?php echo $__env->yieldPushContent('modals'); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php if(session('swal')): ?>
        <script>
            Swal.fire(<?php echo json_encode(session('swal'), 15, 512) ?>);
        </script>
    <?php endif; ?>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\wamp64\www\HotelRP24\resources\views/layouts/admin.blade.php ENDPATH**/ ?>