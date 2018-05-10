<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午11:28
 */

declare(strict_types = 1);

namespace create\factoryMethod;

class CatFactory extends Factory
{
    public function create()
    {
        return new Cat();
    }
}