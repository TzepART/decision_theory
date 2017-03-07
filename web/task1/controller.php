<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 08.02.17
 * Time: 0:01
 */
use Controllers\FactoryStrategies;

include __DIR__.'/../autoloader.php';


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

    $twig = \App\AppKernel::getInstance()->getTwig();

    echo $twig->render('task_respons.html.twig', array('name' => 'Fabien'));
}




