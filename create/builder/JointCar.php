<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:57
 */

declare(strict_types = 1);

namespace create\builder;

/**
 * 具体生成器
 *
 * Class JointCar
 * @package create\builder
 */
class JointCar extends CarBuilder
{
    public function setEngine()
    {
        $this->car->engine = '中国造的引擎';
    }

    public function setWindow()
    {
        $this->car->window = '美国造的窗户';
    }
}   