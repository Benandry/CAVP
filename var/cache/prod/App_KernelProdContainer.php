<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSKdhYSa\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSKdhYSa/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerSKdhYSa.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerSKdhYSa\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerSKdhYSa\App_KernelProdContainer([
    'container.build_hash' => 'SKdhYSa',
    'container.build_id' => '9a49d03a',
    'container.build_time' => 1657533846,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSKdhYSa');
