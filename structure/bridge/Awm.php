<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午5:10
 */

declare(strict_types = 1);

namespace structure\bridge;

/**
 * 具体实现角色
 *
 * Class Awm
 * @package structure\bridge
 */
class Awm extends Gun
{
    protected $name = 'AWM';

    public function fire()
    {
        return "拿着{$this->name}开了一枪,吃到了鸡" . PHP_EOL;
    }
}