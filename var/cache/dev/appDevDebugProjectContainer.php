<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZms7zsg\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZms7zsg/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZms7zsg.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZms7zsg\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZms7zsg\appDevDebugProjectContainer([
    'container.build_hash' => 'Zms7zsg',
    'container.build_id' => '471b75eb',
    'container.build_time' => 1589885780,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZms7zsg');
