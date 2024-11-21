<?php
    $links = [
        [
            'name' => 'Dashboard',
            'url' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
            'icon' => 'fa-solid fa-gauge-high',
            'can' => ['Acceso dashboard'],
        ],
        [
            'name' => 'Categorías',
            'url' => route('admin.categories.index'),
            'active' => request()->routeIs('admin.categories.*'),
            'icon' => 'fa-solid fa-inbox',
            'can' => ['Gestion categorias'],
        ],
        [
            'name' => 'Artículos',
            'url' => route('admin.posts.index'),
            'active' => request()->routeIs('admin.posts.*'),
            'icon' => 'fa-solid fa-blog',
            'can' => ['Gestion articulos'],
        ],
        [
            'name' => 'Roles',
            'url' => route('admin.roles.index'),
            'active' => request()->routeIs('admin.roles.*'),
            'icon' => 'fa-solid fa-user-tag',
            'can' => ['Gestion roles'],
        ],
        [
            'name' => 'Permisos',
            'url' => route('admin.permissions.index'),
            'active' => request()->routeIs('admin.permissions.*'),
            'icon' => 'fa-solid fa-key',
            'can' => ['Gestion permisos'],
        ],

        [
            'name' => 'Usuarios',
            'url' => route('admin.users.index'),
            'active' => request()->routeIs('admin.users.*'),
            'icon' => 'fa-solid fa-users',
            'can' => ['Gestion usuarios'],
        ],
        [
            'name' => 'Hoteles',
            'url' => route('admin.hoteles.index'),
            'active' => request()->routeIs('admin.hoteles.*'),
            'icon' => 'fa-solid fa-hotel',
            'can' => ['Gestion hoteles'],
        ],
        [
            'name' => 'Subproductos',
            'url' => route('admin.subproductos.index'),
            'active' => request()->routeIs('admin.subproductos.*'),
            'icon' => 'fa-solid fa-recycle',
            'can' => ['Gestion subproductos'],
        ],
        [
            'name' => 'Evidencias',
            'url' => route('admin.evidencias.index'),
            'active' => request()->routeIs('admin.evidencias.*'),
            'icon' => 'fa-solid fa-images',
            'can' => ['Gestion evidencias'],
        ],
        [
            'name' => 'Formulario',
            'url' => route('admin.forms.index'),
            'active' => request()->routeIs('admin.forms.*'),
            'icon' => 'fa-brands fa-wpforms',
            'can' => ['Gestion formulario'],
        ],
        [
            'name' => 'Graficas',
            'url' => route('admin.graficas.index'),
            'active' => request()->routeIs('admin.graficas.*'),
            'icon' => 'fa-solid fa-chart-line',
            //'can' => ['Gestion evidencias'],
        ],
    ];
?>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    :class="{
        '-translate-x-full': !open,
        'transfrom-none': open,
    }" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any($link['can'] ?? [null])): ?>
                    <li>
                        <a href="<?php echo e($link['url']); ?>"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group <?php echo e($link['active'] ? 'bg-gray-100' : ''); ?>">
                            <i class="fas <?php echo e($link['icon']); ?> text-grayu-600"></i>
                            <span class="ms-3">
                                <?php echo e($link['name']); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </ul>
    </div>
</aside>
<?php /**PATH C:\wamp64\www\HotelRP24\resources\views/layouts/includes/admin/aside.blade.php ENDPATH**/ ?>