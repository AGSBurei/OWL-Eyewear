<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRfOK8JX\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRfOK8JX/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerRfOK8JX.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerRfOK8JX\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerRfOK8JX\srcApp_KernelProdContainer([
    'container.build_hash' => 'RfOK8JX',
    'container.build_id' => 'c4c7faab',
    'container.build_time' => 1571138625,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRfOK8JX');
