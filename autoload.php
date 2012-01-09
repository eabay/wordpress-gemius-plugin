<?php

if (!class_exists('Doctrine\Common\ClassLoader')) {
    require_once __DIR__.'/vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php';
}

$classMap = require __DIR__.'/vendor/.composer/autoload_namespaces.php';

foreach ($classMap as $namespace => $path) {
    $loader = new Doctrine\Common\ClassLoader($namespace, $path);
    $loader->register();
}