<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午5:07
 */

declare(strict_types = 1);

namespace structure\bridge;

/**
 * 具体实现化角色
 *
 * Class Kar
 * @package structure\bridge
 */
class Kar extends Gun
{
    protected $name = '98k';

    public function fire()
    {
        return "拿着{$this->name}开了一枪,吃到了鸡" . PHP_EOL;
    }
}