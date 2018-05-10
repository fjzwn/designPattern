<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午11:23
 */

declare(strict_types = 1);

namespace create\factoryMethod;

/**
 * 抽象动物类
 *
 * Class Animal
 * @package create\factoryMethod
 */
abstract class Animal
{
    abstract public function create();
}