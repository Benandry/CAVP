<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHr3QzlX\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHr3QzlX/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerHr3QzlX.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerHr3QzlX\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerHr3QzlX\App_KernelProdContainer([
    'container.build_hash' => 'Hr3QzlX',
    'container.build_id' => 'f7c9fe5d',
    'container.build_time' => 1652337647,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHr3QzlX');
