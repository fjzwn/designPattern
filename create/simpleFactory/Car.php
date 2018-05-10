<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午10:17
 */

declare(strict_types = 1);

namespace create\simpleFactory;

/**
 * 具体交通工具类
 *
 * Class Car
 * @package create\simpleFactory
 */
class Car extends Vehicle
{
    public function drive()
    {
        echo '汽车在地上走' . PHP_EOL;
    }
}