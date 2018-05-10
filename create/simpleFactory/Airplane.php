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
 * Class Airplane
 * @package create\simpleFactory
 */
class Airplane extends Vehicle
{
    public function drive()
    {
        echo '飞机在天上飞' . PHP_EOL;
    }
}
