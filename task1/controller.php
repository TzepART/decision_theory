<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 08.02.17
 * Time: 0:01
 */
use Controllers\FactoryStrategies;
include '../autoloader.php';

//error_reporting(E_ALL);
//ini_set("display_errors", 1);


$matrix = isset($_POST['matrix']) ? $_POST['matrix'] : null;
$strategyName = isset($_POST['strategy']) ? $_POST['strategy'] : null;
$coefficient = isset($_POST['coefficient']) ? $_POST['coefficient'] : 0;


if(!empty($matrix) && !empty($strategyName)){

    $strategy = FactoryStrategies::getStrategy($strategyName);

    /** @var \Controllers\AbstractStrategy $strategy */
    if($strategy != null){
        $result = $strategy->getOptimalSolution($matrix,$coefficient);
        echo $strategyName.'<br>';
        echo 'solution '.$result['solution'].'<br>';
        echo 'value '.$result['value'].'<br>';
    }

    $loader = new Twig_Loader_Array(array(
        'index' => 'Hello {{ name }}!',
    ));
    $twig = new Twig_Environment($loader);

    echo $twig->render('index', array('name' => 'Fabien'));
}





