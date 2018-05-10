<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午11:25
 */

declare(strict_types = 1);

namespace create\factoryMethod;

class Cat extends Animal
{
    public function create()
    {
        echo '造了一只猫' . PHP_EOL;
    }
}