<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 11.02.17
 * Time: 17:55
 */

namespace App\Controllers;


abstract class AbstractStrategy
{
    /**
     * @param array $matrix
     * @param int $coefficient
     * @return array
     */
    abstract function getOptimalSolution($matrix, $coefficient = 0);

    /**
     * @param $array
     * @return array
     */
    protected function transponirating($array)
    {
        $tempArray = [];
        foreach ($array as $i => $row) {
            foreach ($row as $j => $item) {
                $tempArray[$j][$i] = $item;
            }
        }
        return $tempArray;
    }

}
