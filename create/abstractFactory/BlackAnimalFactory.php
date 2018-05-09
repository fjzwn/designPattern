<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:17
 */

declare(strict_types = 1);

namespace create\abstractFactory;

/**
 * 具体工厂
 *
 * Class BlackAnimalFactory
 * @package create\abstractFactory
 */
class BlackAnimalFactory extends AnimalFactory
{
    public function createCat()
    {
        $cat = new BlackCat();
        $cat->create();
    }

    public function createDog()
    {
        
    }
}