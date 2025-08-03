
    <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl flex h-16 items-center justify-center">
        <div class="flex gap-4">
            <a href="/"          class="<?= $_SERVER['REQUEST_URI'] === '/'      ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium">Inicio</a>
            <
            <a href="/about" class="<?= $_SERVER['REQUEST_URI'] === '/about'     ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium">Acerca de</a>
            <a href="/links" class="<?= $_SERVER['REQUEST_URI'] === '/links'     ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium cursor-grab">Proyectos</a>
            <a href="/blog"  class="<?= $_SERVER['REQUEST_URI'] === '/blog'      ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium">Blogs</a>
        </div>
    </div>
</nav>



<?php

// var_dump($_SERVER['REQUEST_URI'] ?? 'No hay URI solicitada');
// die();
?>

