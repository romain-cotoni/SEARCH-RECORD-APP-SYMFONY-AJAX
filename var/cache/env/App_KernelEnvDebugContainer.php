<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEKRnXra\App_KernelEnvDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEKRnXra/App_KernelEnvDebugContainer.php') {
    touch(__DIR__.'/ContainerEKRnXra.legacy');

    return;
}

if (!\class_exists(App_KernelEnvDebugContainer::class, false)) {
    \class_alias(\ContainerEKRnXra\App_KernelEnvDebugContainer::class, App_KernelEnvDebugContainer::class, false);
}

return new \ContainerEKRnXra\App_KernelEnvDebugContainer([
    'container.build_hash' => 'EKRnXra',
    'container.build_id' => '7eebda1e',
    'container.build_time' => 1639683822,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEKRnXra');
