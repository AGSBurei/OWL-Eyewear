<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGF3O3c2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGF3O3c2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGF3O3c2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGF3O3c2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGF3O3c2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GF3O3c2',
    'container.build_id' => 'a50b17ca',
    'container.build_time' => 1571327760,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGF3O3c2');
