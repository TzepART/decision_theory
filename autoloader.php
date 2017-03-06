<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 11.02.17
 * Time: 22:59
 */
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require 'vendor/autoload.php';
$loader->addClassMap([
    'Controllers\FactoryStrategies'=>__DIR__.'/Controllers/FactoryStrategies.php',
    'Controllers\HurwitzStrategy'=>__DIR__.'/Controllers/HurwitzStrategy.php',
    'Controllers\BayasLaplasStrategy'=>__DIR__.'/Controllers/BayasLaplasStrategy.php',
    'Controllers\MinimaxStrategy'=>__DIR__.'/Controllers/MinimaxStrategy.php',
    'Controllers\SevidgStrategy'=>__DIR__.'/Controllers/SevidgStrategy.php',
    'Controllers\AbstractStrategy'=>__DIR__.'/Controllers/AbstractStrategy.php',
]);
$loader->register();
$loader->setUseIncludePath(true);

