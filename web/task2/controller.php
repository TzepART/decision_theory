<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 08.02.17
 * Time: 0:01
 */
include __DIR__.'/../autoloader.php';

use Controllers\FactoryStrategies;
use Controllers\BayasLaplasStrategy;


$arCountElements = isset($_POST['x']) ? $_POST['x'] : null;
$arProbabilities = isset($_POST['p']) ? $_POST['p'] : null;
$cost = isset($_POST['cost']) ? $_POST['cost'] : null;
$good_price = isset($_POST['good_price']) ? $_POST['good_price'] : null;
$bad_price = isset($_POST['bad_price']) ? $_POST['bad_price'] : null;


if(!empty($arCountElements) && !empty($arProbabilities)&& !empty($cost)&& !empty($good_price)&& !empty($bad_price)){

    $matrix = [];
    $strategy =     $strategy = FactoryStrategies::getStrategy(BayasLaplasStrategy::STRATEGY_NAME);


    /** @var BayasLaplasStrategy $strategy */
    if($strategy != null){
        $count = count($arCountElements);

        for ($i = 0; $i < $count; $i++){
            $payedCount = $arCountElements[$i];
            foreach ($arCountElements as $j => $realizedCount) {
                $unrealizedCount = 0;
                if($payedCount > $realizedCount){
                    $unrealizedCount = $realizedCount - $payedCount;
                }else{
                    $realizedCount = $payedCount;
                }
                $matrix[$i][$j] = $good_price*$realizedCount + $bad_price*$unrealizedCount - $cost*$payedCount;
            }
        }

        echo '<br>';
        foreach ($matrix as $index => $row) {
            echo '| ';
            foreach ($row as $i => $item) {
                echo $item.' | ';
            }
            echo '<br>';
        }

        $result = $strategy->setArrayProbabilities($arProbabilities)->getOptimalSolution($matrix);

        echo '<br>';
        foreach ($result['new_matrix'] as $index => $row) {
            echo '| ';
            foreach ($row as $i => $item) {
                echo $item.' | ';
            }
            echo '<br>';
        }

        echo 'bayes-laplas <br>';
        echo 'solution '.$result['solution'].'<br>';
        echo 'value '.$result['value'].'<br>';
    }
}





