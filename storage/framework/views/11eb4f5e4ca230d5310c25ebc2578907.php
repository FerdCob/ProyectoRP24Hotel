<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['breadcrumb' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
    ['name' => 'Home', 'url' => route('admin.dashboard')],
    ['name' => 'Formulario', 'url' => route('admin.forms.index')],
    ['name' => 'Registro'],
])]); ?>
    <h1 class="flex items-center justify-center text-3xl font-extrabold dark:text-white underline">
        <span > Nuevo Registro </span>
    </h1>

    <!-- Datos Generales -->
    <form action="#">
        <?php echo csrf_field(); ?>
        <?php if (isset($component)) { $__componentOriginalb24df6adf99a77ed35057e476f61e153 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb24df6adf99a77ed35057e476f61e153 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.validation-errors','data' => ['class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb24df6adf99a77ed35057e476f61e153)): ?>
<?php $attributes = $__attributesOriginalb24df6adf99a77ed35057e476f61e153; ?>
<?php unset($__attributesOriginalb24df6adf99a77ed35057e476f61e153); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb24df6adf99a77ed35057e476f61e153)): ?>
<?php $component = $__componentOriginalb24df6adf99a77ed35057e476f61e153; ?>
<?php unset($__componentOriginalb24df6adf99a77ed35057e476f61e153); ?>
<?php endif; ?>
        <!-- Datos generales -->
        <section>
            <h3 class="mb-4 text-xl font-extrabold text-gray-900 dark:text-white md:text-2xl lg:text-3xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Datos Generales
                </span>
            </h3>


            <div class="grid grid-cols-2 gap-4 mt-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Fecha de registro</label>
                    <input type="date" name="fecha" value="<?php echo e($fecha); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre del hotel asignado</label>
                    <input type="text" name="hotel" value="<?php echo e($hotel->nombre); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
        </section>
        <hr class="my-6 border-t-8 rounded-full">
        <!-- Bitácora Generación Total Semanal -->
        <section>
            <h3 class="mb-4 text-xl font-extrabold text-gray-900 dark:text-white md:text-2xl lg:text-3xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Bitácora Generación Total Semanal
                </span>
            </h3>
            <p class="italic  mb-2 text-sm text-red-600/50 dark:text-red-500/50">Todos los valores de esta sección
                son numéricos*</p>
            <!-- Restaurante -->
            <h4 class=" mb-3 text-sm font-semibold text-gray-500 mt-4">Restaurante</h4>
            <input type="hidden" name="seccion1" value="4"> <!-- Input que guarda el valor del tipo de seccion-->
            <div class="grid grid-cols-5 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Alimenticios</label>
                    <input type="number" value="<?php echo e($alires); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Composteables</label>
                    <input type="number" value="<?php echo e($comres); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Inorgánicos Valorizables</label>

                    <input type="number" value="<?php echo e($inores); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Inorgánicos No Valorizables</label>
                    <input type="number" value="<?php echo e($inores); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Generado</label>
                    <input type="number" value="<?php echo e($totalres); ?>" tabindex="-1"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
                </div>
            </div>
            <!-- Habitaciones -->
            <h4 class=" mb-3 text-sm font-semibold text-gray-500 mt-4">Habitaciones</h4>
            <input type="hidden" name="seccion3" value="6"> <!-- Input que guarda el valor del tipo de seccion-->
            <div class="grid grid-cols-3 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Inorgánicos Valorizables</label>

                    <!-- Input que guarda el valor del tipo de residuo-->
                    <input type="number" value="<?php echo e($inohab); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Inorgánicos (No Valorizables -
                        Sanitarios)</label>
                    <!-- Input que guarda el valor del tipo de residuo-->
                    <input type="number" value="<?php echo e($sanhab); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Generado</label>
                    <input type="number" value="<?php echo e($totalhab); ?>" tabindex="-1"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
                </div>
            </div>
            <!-- Áreas comunes -->
            <h4 class=" mb-3 text-sm font-semibold text-gray-500 mt-4">Áreas comunes</h4>
            <input type="hidden" name="seccion2" value="5">
            <!-- Input que guarda el valor del tipo de seccion-->
            <div class="grid grid-cols-4 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Sanitarios No valorizables</label>
                    <input type="hidden" name="residuo4" value="19">
                    <!-- Input que guarda el valor del tipo de residuo-->
                    <input type="number" value="<?php echo e($sancom); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Orgánico</label>
                    <input type="hidden" name="residuo5" value="20">
                    <!-- Input que guarda el valor del tipo de residuo-->
                    <input type="number" value="<?php echo e($orgcom); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Inorgánicos Valorizables</label>
                    <input type="hidden" name="residuo6" value="18">
                    <!-- Input que guarda el valor del tipo de residuo-->
                    <input type="number" value="<?php echo e($inocom); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Generado</label>
                    <input type="number" value="<?php echo e($totalcom); ?>" tabindex="-1"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
                </div>
            </div>
            <!-- Total -->
            <h4 class="mb-3 my-4">Total generación semanal</h4>
            <div class="grid grid-cols-4 gap-4">
                <input type="number" value="<?php echo e($totalgen); ?>" tabindex="-1"
                    class="
                    
                    block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
            </div>
        </section>
        <hr class="my-6 border-t-8 rounded-full">
        <!-- Bitácora De Generación Per Cápita Semanal -->
        <section>
            <h3 class="mb-4 text-xl font-extrabold text-gray-900 dark:text-white md:text-2xl lg:text-3xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Bitácora De Generación Per Cápita Semanal
                </span>
            </h3>
            <p class="italic  mb-2 text-sm text-red-600/50 dark:text-red-500/50">Todos los valores de esta sección
                son numéricos*</p>
            <!-- Primer apartado de insercion -->
            <div class="grid grid-cols-3 gap-4 w-full">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">N° Habitaciones Ocupadas</label>

                    <input type="number" value="<?php echo e($hab); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        N° Huespedes por noche </label>

                    <input type="number" value="<?php echo e($hue); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">N° de personal</label>

                    <input type="number" value="<?php echo e($per); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
            <!-- Segundo apartado, generacion automatica -->
            <h4 class="mb-3 text-sm font-semibold text-gray-500 mt-4">Generación total Per capita</h4>
            <div class="grid grid-cols-2 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total kg por persona</label>
                    <input type="number" value="<?php echo e($per1); ?>"tabindex="-1"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total kg por habitacion</label>
                    <input type="number" value="<?php echo e($per2); ?>"tabindex="-1"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
                </div>
            </div>

        </section>
        <hr class="my-6 border-t-8 rounded-full">
        <!-- Bitácora de subproductos -->
        <section>
            <h3 class="mb-4 text-xl font-extrabold text-gray-900 dark:text-white md:text-2xl lg:text-3xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Bitácora de subproductos
                </span>
            </h3>
            <p class="italic  mb-2 text-sm text-red-600/50 dark:text-red-500/50">Todos los valores de esta sección
                son numéricos*</p>
            <!-- Subproductos -->
            <h4 class=" mb-3 text-sm font-semibold text-gray-500 mt-4">Subproductos</h4>
            
            <div class="grid grid-cols-4 gap-4 w-full mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Carton</label>
                    <input type="number" value="<?php echo e($car); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Papel</label>
                    <input type="number"value="<?php echo e($pap); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Aluminio</label>
                    <input type="number" value="<?php echo e($alu); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Metal</label>
                    <input type="number" value="<?php echo e($met); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
            
            <div class="grid grid-cols-4 gap-4 w-full mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">PET</label>
                    <input type="number" value="<?php echo e($pet); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Plastico Rigido</label>
                    <input type="number" value="<?php echo e($rig); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Jardineria</label>
                    <input type="number" value="<?php echo e($jar); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Alimenticios</label>
                    <input type="number" value="<?php echo e($ali); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
            
            <div class="grid grid-cols-4 gap-4 w-full mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Composteables</label>
                    <input type="number"value="<?php echo e($com); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Sanitarios</label>
                    <input type="number" value="<?php echo e($san); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Otros (No Valorizables)</label>
                    <input type="number" value="<?php echo e($nva); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Manejo Especial</label>
                    <input type="number" value="<?php echo e($mes); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
            
            <div class="grid grid-cols-4 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Peligrosos</label>
                    <input type="number" value="<?php echo e($pel); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Vidrio</label>
                    <input type="number" value="<?php echo e($vid); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
            <!-- Total -->
            <h4 class="mb-3 my-4">Total Generado</h4>
            <div class="grid grid-cols-4 gap-4">
                <input type="number" value="<?php echo e($totalsub); ?>" readonly tabindex="-1"
                    class="
                     
                     block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
            </div>
        </section>
        <hr class="my-6 border-t-8 rounded-full">
        <!-- Bitácora del peso volumetrico (Valorizables) -->
        <section>
            <h3 class="mb-4 text-xl font-extrabold text-gray-900 dark:text-white md:text-2xl lg:text-3xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Bitácora del peso volumetrico (Valorizables)
                </span>
            </h3>
            <p class="italic  mb-2 text-sm text-red-600/50 dark:text-red-500/50">Todos los valores de esta sección
                son numéricos*</p>
            
            <figure class="max-w-lg mx-auto mb-4">
                <img class="h-auto max-w-full rounded-lg" src="<?php echo e(asset('storage/Volumen/ilustration1.png')); ?>"
                    alt="image description">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Imagen representativa
                    del contenedor de los residuos valorizables</figcaption>
                </figcaption>
            </figure>

            <div class="grid grid-cols-2 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Volumen Recipiente(m³)</label>
                    <input type="number" value="<?php echo e($vre); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Peso Neto</label>
                    <input type="number" value="<?php echo e($pne); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
            <!-- Total -->
            <h4 class="mb-3 my-4">Total Generado</h4>
            <div class="grid grid-cols-4 gap-4">
                <input type="number" value="<?php echo e($pvo); ?>" tabindex="-1"
                    class=" block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
            </div>

        </section>
        <hr class="my-6 border-t-8 rounded-full">
        <!-- Bitácora del peso volumetrico (No Valorizables) -->
        <section>
            <h3 class="mb-4 text-xl font-extrabold text-gray-900 dark:text-white md:text-2xl lg:text-3xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Bitácora del peso volumetrico (No Valorizables)
                </span>
            </h3>
            <p class="italic  mb-2 text-sm text-red-600/50 dark:text-red-500/50">Todos los valores de esta sección
                son numéricos*</p>
            
            <figure class="max-w-lg mx-auto mb-4">
                <img class="h-auto max-w-full rounded-lg" src="<?php echo e(asset('storage/Volumen/ilustration1.png')); ?>"
                    alt="image description">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Imagen representativa
                    del contenedor de los residuos valorizables</figcaption>
                </figcaption>
            </figure>

            <div class="grid grid-cols-2 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Volumen Recipiente(m³)</label>
                    <input type="number" value="<?php echo e($nvro); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Peso Neto</label>
                    <input type="number" value="<?php echo e($npne); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
            </div>
            <!-- Total -->
            <h4 class="mb-3 my-4">Total Generado</h4>
            <div class="grid grid-cols-4 gap-4">
                <input type="number" value="<?php echo e($npvo); ?>" tabindex="-1"
                    class=" block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
            </div>

        </section>
        <hr class="my-6 border-t-8 rounded-full">
        <!-- Bitácora De Producción De Residuos Urbanos Valorizables -->
        <section>
            <h3 class="mb-4 text-xl font-extrabold text-gray-900 dark:text-white md:text-2xl lg:text-3xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    Bitácora De Producción De Residuos Urbanos Valorizables
                </span>
            </h3>
            <p class="italic  mb-2 text-sm text-red-600/50 dark:text-red-500/50">Todos los valores de esta sección
                son numéricos*</p>
            <h4 class=" mb-3 text-sm font-semibold text-gray-500 mt-4">Generación de residuos Valorizables</h4>
            <div class="grid grid-cols-3 gap-4 w-full">
                <div>
                    <label class="block text-sm font-medium text-gray-700">N° Semana</label>
                    <!-- Input que guarda el valor del tipo de residuo-->
                    <input type="number" value="<?php echo e($tval->semana); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">N° día</label>
                    <!-- Input que guarda el valor del tipo de residuo-->
                    <input type="number" value="<?php echo e($tval->dia); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded" readonly>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Generado</label>
                    <input type="number" value="<?php echo e($tval->valorkg); ?>" tabindex="-1"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded bg-gray-100 pointer-events-none">
                </div>
            </div>
        </section>
        <hr class="my-8 border-t-2 rounded-full border-transparent">
        <!-- Fin -->
        <div class="flex justify-end  ">
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
                <a href="<?php echo e(route('admin.forms.index')); ?>">Regresar</a>
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
    <!-- Incluir el JavaScript compilado por Vite -->
    <?php $__env->startPush('js'); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/form-calculations.js']); ?>
    <?php $__env->stopPush(); ?>
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
<?php /**PATH C:\wamp64\www\HotelRP24\resources\views/admin/forms/show.blade.php ENDPATH**/ ?>