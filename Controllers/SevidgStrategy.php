<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 11.02.17
 * Time: 18:04
 */

namespace Controllers;


class SevidgStrategy extends AbstractStrategy
{
    const STRATEGY_NAME = 'savidg';

    /**
     * @param array $matrix
     * @return array
     */
    public function getOptimalSolution($matrix)
    {
        $refactorArray = [];
        $maxArray = [];
        $result = [];

        $tempArray = $this->transponirating($matrix);

        foreach ($tempArray as $i => $col) {
            $max = max($col);
            foreach ($col as $j => $item) {
                $refactorArray[$j][$i] = $max-$item;
            }
        }

        $solution = 0;
        $solutionValue = max($refactorArray[0]);
        foreach ($refactorArray as $index => $row) {
            if($solutionValue > max($row)){
                $solution = $index+1;
                $solutionValue = max($row);
            }
        }

        $result['solution'] = $solution;
        $result['value'] = $solutionValue;

        return $result;
    }

}