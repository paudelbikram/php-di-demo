<?php
/**
 * The bootstrap file creates and returns the container.
 */

use DI\ContainerBuilder;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/config.php');
// To gain that speed 
$containerBuilder->enableCompilation(__DIR__ . '/compiled');
$containerBuilder->writeProxiesToFile(true, __DIR__ . '/compiled/proxies');
$container = $containerBuilder->build();

return $container;
