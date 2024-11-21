<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['name' => 'Home']])]); ?>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded shadow-lg  px-6 py-4">
            <div class="flex items-center">
                <button
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition flex-shrink-0">
                    <img class="h-8 w-8 rounded-full object-cover" src="<?php echo e(Auth::user()->profile_photo_url); ?>"
                        alt="<?php echo e(Auth::user()->name); ?>" />
                </button>

                <div class="ml-4">
                    <h2 class="text-lg font-semibold">
                        Bienvenido <?php echo e(Auth::user()->name); ?>

                    </h2>
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="text-sm hover:text-red-500">Cerrar sesión</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="bg-white rounded shadow-lg  p-6 flex items-center justify-center">
            <h2 class="text-xl font-semibold ">
                Bienvenido al panel de administración
            </h2>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $attributes = $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\HotelRP24\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>