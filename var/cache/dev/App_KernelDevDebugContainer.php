<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAe20nPJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAe20nPJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAe20nPJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAe20nPJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAe20nPJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ae20nPJ',
    'container.build_id' => '2532d2c6',
    'container.build_time' => 1704205744,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAe20nPJ');
