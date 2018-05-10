<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午10:15
 */

declare(strict_types = 1);

namespace create\simpleFactory;

/**
 * 抽象交通工具类
 *
 * Class Vehicle
 * @package create\simpleFactory
 */
abstract class Vehicle
{
    abstract public function drive();
}