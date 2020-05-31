<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 11.02.17
 * Time: 22:59
 */

require __DIR__ . '/../vendor/autoload.php';

use App\AppKernel;

$twigLoader = new Twig_Loader_Filesystem(__DIR__ . '/../src/Templates');
$twig = new Twig_Environment($twigLoader);

AppKernel::getInstance()->setTwig($twig);
