<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYZ9BVAQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYZ9BVAQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYZ9BVAQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYZ9BVAQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYZ9BVAQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YZ9BVAQ',
    'container.build_id' => '969135d8',
    'container.build_time' => 1574255426,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYZ9BVAQ');
