<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKiZ6Mtf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKiZ6Mtf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKiZ6Mtf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKiZ6Mtf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKiZ6Mtf\App_KernelDevDebugContainer([
    'container.build_hash' => 'KiZ6Mtf',
    'container.build_id' => '5c35982b',
    'container.build_time' => 1612559422,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKiZ6Mtf');
