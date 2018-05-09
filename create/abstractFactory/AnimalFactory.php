<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:13
 */

declare(strict_types = 1);

namespace create\abstractFactory;

/**
 * 抽象工厂
 *
 * Class AnimalFactory
 * @package create\abstractFactory
 */
abstract class AnimalFactory
{
    abstract public function createCat();
    abstract public function createDog();
}
