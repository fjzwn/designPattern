<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:54
 */

declare(strict_types = 1);

namespace create\builder;

/**
 * 抽象生成器
 *
 * Class CarBuilder
 * @package create\builder
 */
abstract class CarBuilder
{
    protected $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    abstract public function setEngine();
    abstract public function setWindow();

    public function getCar()
    {
        return $this->car;
    }
}