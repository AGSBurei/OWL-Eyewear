<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUniKZXl\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUniKZXl/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerUniKZXl.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerUniKZXl\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerUniKZXl\srcApp_KernelProdContainer([
    'container.build_hash' => 'UniKZXl',
    'container.build_id' => '2cc47640',
    'container.build_time' => 1571423318,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUniKZXl');
