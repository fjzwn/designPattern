<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午4:48
 */

declare(strict_types = 1);

namespace structure\decorator;

/**
 * 旅行抽象类，被装饰对象
 *
 * Class Travel
 * @package structure\decorator
 */
abstract class Travel
{
    abstract public function cost();
}