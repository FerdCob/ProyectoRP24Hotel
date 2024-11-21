<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <figure class="mb-12">
        <img src="<?php echo e(asset('img/home/portada.jpeg')); ?>" alt="Portada del Home"
            class="w-full aspect[3/1] object-cover object-center">
    </figure>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        <h1 class="text-3xl text-center font-semibold mb-6">
            Lista de Articulos
        </h1>
        
        i categoria ==! "" undefined null else categoria == post == consulta base de datos
        <div class="grid grid-cols-4">
            <div class="col-span-1">
                <form action="<?php echo e(route('home')); ?>">
                    <div class="mb-4">
                        <p class="text-lg font-semibold">
                            Ordenar por:
                        </p>
                        <select name="order"
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <option value="new">Más recientes</option>
                            <option value="old" <?php if(request('order') == 'old'): echo 'selected'; endif; ?>>Más antiguos</option>
                        </select>
                    </div>
                    <div>
                        <p class="text-lg font-semibold">Categorías:</p>

                        <ul>
                            <?php if(is_array(request('category'))): ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category[]" value="<?php echo e($category->id); ?>"
                                                <?php if(is_array(request('category')) && in_array($category->id, request('category'))): ?> checked <?php endif; ?>
                                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                            <span class="ml-2 text-gray-700">
                                                <?php echo e($category->name); ?>

                                            </span>
                                        </label>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                $category = []
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category[]" value="<?php echo e($category->id); ?>"
                                                <?php if(request('category') == $category->id): ?> checked <?php endif; ?>
                                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                            <span class="ml-2 text-gray-700">
                                                <?php echo e($category->name); ?>

                                            </span>
                                        </label>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </ul>
                    </div>

                    <div class="mt-4">

                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            Aplicar filtros
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                    </div>
                </form>
            </div>
            <div class="col-span-3">
                <div class="space-y-8">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="grid grid-cols-2 gap-6 ">
                            <figure
                                class="relative max-w-sm transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                                <a href="<?php echo e(route('posts.show', $post)); ?>">
                                    <img class="rounded-lg" src="<?php echo e($post->image); ?>" alt="<?php echo e($post->title); ?>">
                                </a>
                                <figcaption class="absolute px-4 text-lg text-white bottom-6">
                                    
                                </figcaption>
                            </figure>

                            <div>
                                <h1 class="text-xl font-semibold">
                                    <a href="<?php echo e(route('posts.show', $post)); ?>"
                                        class="hover:underline"><?php echo e($post->title); ?></a>
                                </h1>
                                <hr class="mt-1
                                        mb-2">
                                <div class="mb-2">
                                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('home') . '?tag=' . $tag->name); ?>">
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300"><?php echo e($tag->name); ?></span>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <p class="text-sm mb-2">
                                    <?php echo e($post->published_at->format('d M Y')); ?>

                                </p>
                                <div class="mb-4">
                                    <?php echo e(Str::limit($post->excerpt, 100)); ?>

                                </div>
                                <div>
                                    <button
                                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                        <a href="<?php echo e(route('posts.show', $post)); ?>"
                                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Leer más
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mb-8">
                    <?php echo e($posts->links()); ?>

                </div>

            </div>
        </div>




    </section>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\HotelRP24\resources\views/welcome.blade.php ENDPATH**/ ?>