<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 11.02.17
 * Time: 22:59
 */
function __autoload($classname) {
    $classname = str_replace('\\','/',$classname);
    $filename = $classname.".php";
    include_once($filename);
}

