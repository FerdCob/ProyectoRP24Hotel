<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['name' => 'Home', 'url' => route('admin.dashboard')], ['name' => 'Artículos']])]); ?>
     <?php $__env->slot('action', null, []); ?> 
        <a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
            href="<?php echo e(route('admin.posts.create')); ?>">Nuevo</a>
     <?php $__env->endSlot(); ?>


    <ul class="space-y-8">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <a href="<?php echo e(route('admin.posts.edit', $post)); ?>">
                        <img class="aspect-[16/9] object-cover object-center  w-full" src="<?php echo e($post->image); ?>"
                            alt="">
                    </a>
                </div>
                <div>
                    <h1 class="text-xl font-semibold">
                        <a href="<?php echo e(route('admin.posts.edit', $post)); ?>">
                            <?php echo e($post->title); ?>

                        </a>
                    </h1>

                    <hr class="mt-1 mb-2">

                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300' =>
                            $post->published,
                        'bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300' => !$post->published,
                    ]); ?>">
                        <?php echo e($post->published ? 'Publicado' : 'Borrador'); ?>

                    </span>
                    <p class="text-gray-700 mt-2">
                        <?php echo e(Str::limit($post->excerpt, 100)); ?>

                    </p>
                    <div class="flex justify-end mt-4">
                        <a href="<?php echo e(route('admin.posts.edit', $post)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Editar
                        </a>

                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
    <div class="m-4">
        <?php echo e($posts->links()); ?>

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
<?php /**PATH C:\wamp64\www\HotelRP24\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>