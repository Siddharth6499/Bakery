<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFwyfxQj\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFwyfxQj/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerFwyfxQj.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerFwyfxQj\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerFwyfxQj\App_KernelProdContainer([
    'container.build_hash' => 'FwyfxQj',
    'container.build_id' => '8cc75d80',
    'container.build_time' => 1611738476,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFwyfxQj');