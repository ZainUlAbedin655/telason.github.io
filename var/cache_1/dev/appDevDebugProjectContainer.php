<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV3sixrx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV3sixrx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerV3sixrx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerV3sixrx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerV3sixrx\appDevDebugProjectContainer(array(
    'container.build_hash' => 'V3sixrx',
    'container.build_id' => '93575362',
    'container.build_time' => 1560416285,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerV3sixrx');
