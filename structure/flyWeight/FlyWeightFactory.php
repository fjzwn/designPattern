<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午1:42
 */

declare(strict_types = 1);

namespace structure\flyWeight;

/**
 * 享元工厂
 *
 * Class FlyWeightFactory
 * @package structure\flyWeight
 */

class FlyWeightFactory
{
    // 享元池
    private $flyWeights = [];

    // 获得具体类
    public function getPhone($name)
    {
        if (!isset($this->flyWeights[$name])) {
            $this->flyWeights[$name] = new $name();
        }

        return $this->flyWeights[$name];
    }
}