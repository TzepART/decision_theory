<?php
/**
 * Created by PhpStorm.
 * User: tzepart
 * Date: 11.02.17
 * Time: 18:24
 */

namespace Controllers;


class FactoryStrategies
{
    private $strategy = NULL;

    public function __construct($strategyName) {
        switch ($strategyName) {
            case SevidgStrategy::STRATEGY_NAME:
                $this->strategy = new SevidgStrategy();
                break;

            case MinimaxStrategy::STRATEGY_NAME:
                $this->strategy = new MinimaxStrategy();
                break;

            default:
                $this->strategy = null;
        }

    }

    public function getStrategy() {
        return $this->strategy;
    }

}