<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午2:27
 */

declare(strict_types = 1);

namespace structure\proxy;

abstract class Shop
{
    abstract public function buy($name);
}