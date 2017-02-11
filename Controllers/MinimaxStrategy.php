<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 11.02.17
 * Time: 18:00
 */

namespace Controllers;


class MinimaxStrategy extends AbstractStrategy
{
    const STRATEGY_NAME = 'minimax';

    /**
     * @param array $matrix
     * @return array
     */
    function getOptimalSolution($matrix)
    {
        $minArray = [];
        $tempArray = [];
        $solutionArray = [];
        $result = [];

        $tempArray = $this->transponirating($matrix);

        foreach ($tempArray as $index => $row) {
            $minValue = min($row);
            $minArray[] = $minValue;
            $solutionArray[] = array_search($minValue,$row);
        }

        $solutionValue = max($minArray);

        $result['solution'] = $solutionArray[array_search($solutionValue,$minArray)]+1;
        $result['value'] = $solutionValue;

        return $result;
    }

}