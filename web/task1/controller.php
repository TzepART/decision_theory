<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 08.02.17
 * Time: 0:01
 */

use App\Controllers\FactoryStrategies;
use App\Controllers\AbstractStrategy;
use App\AppKernel;

include __DIR__.'/../autoloader.php';

$matrix = isset($_POST['matrix']) ? $_POST['matrix'] : null;
$strategyName = isset($_POST['strategy']) ? $_POST['strategy'] : null;
$coefficient = isset($_POST['coefficient']) ? $_POST['coefficient'] : 0;

if(!empty($matrix) && !empty($strategyName)){

    $strategy = FactoryStrategies::getStrategy($strategyName);

    /** @var AbstractStrategy $strategy */
    if($strategy != null){
        $result = $strategy->getOptimalSolution($matrix,$coefficient);
        $solution = '';
        $solution .= $strategyName.'<br>';
        $solution .= 'solution '.$result['solution'].'<br>';
        $solution .= 'value '.$result['value'].'<br>';
        echo AppKernel::getInstance()->getTwig()->render('solution.html.twig',['solution' => $solution]);
    }
}





