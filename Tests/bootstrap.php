<?php
if (!@$loader = include __DIR__ . '/../vendor/autoload.php') {
    throw new RuntimeException('Install dependencies to run test suite.');
}

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

error_reporting(E_ALL ^ E_NOTICE);
?>