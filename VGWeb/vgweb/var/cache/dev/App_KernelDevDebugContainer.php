<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPMwK3HM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPMwK3HM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPMwK3HM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPMwK3HM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPMwK3HM\App_KernelDevDebugContainer([
    'container.build_hash' => 'PMwK3HM',
    'container.build_id' => '37f4eab6',
    'container.build_time' => 1620216557,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPMwK3HM');
