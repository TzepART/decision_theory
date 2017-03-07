<?php
include __DIR__.'/autoloader.php';


App\AppKernel::getInstance()->getTwig()->render('main.html.twig');