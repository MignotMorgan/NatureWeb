<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHHe0ep0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHHe0ep0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHHe0ep0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHHe0ep0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHHe0ep0\App_KernelDevDebugContainer([
    'container.build_hash' => 'HHe0ep0',
    'container.build_id' => '0a14b851',
    'container.build_time' => 1688148065,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHHe0ep0');
