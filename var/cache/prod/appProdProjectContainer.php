<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2bn82zo\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2bn82zo/appProdProjectContainer.php') {
    touch(__DIR__.'/Container2bn82zo.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container2bn82zo\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container2bn82zo\appProdProjectContainer([
    'container.build_hash' => '2bn82zo',
    'container.build_id' => '8b766f65',
    'container.build_time' => 1667385004,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2bn82zo');
