<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXBuymZf\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXBuymZf/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXBuymZf.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXBuymZf\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXBuymZf\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XBuymZf',
    'container.build_id' => '35e50662',
    'container.build_time' => 1569931141,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXBuymZf');
