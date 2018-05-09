<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:19
 */

declare(strict_types = 1);

namespace create\abstractFactory;

class WhiteAnimalFactory extends AnimalFactory
{
    public function createCat()
    {
        
    }

    public function createDog()
    {
        $dog = new WhiteDog();
        $dog->create();
    }
}