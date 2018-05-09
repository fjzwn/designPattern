<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午3:03
 */

declare(strict_types = 1);

namespace create\builder;

class Director
{
    public function create(CarBuilder $car)
    {
        $car->setEngine();
        $car->setWindow();

        return $car->getCar();
    }
}