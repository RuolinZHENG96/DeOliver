<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVdu6hqm\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVdu6hqm/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVdu6hqm.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVdu6hqm\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVdu6hqm\appProdProjectContainer(array(
    'container.build_hash' => 'Vdu6hqm',
    'container.build_id' => '3943ae6e',
    'container.build_time' => 1557390347,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerVdu6hqm');
