<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午4:53
 */

declare(strict_types = 1);

namespace structure\decorator;

/**
 * 旅行类装饰器抽象类
 *
 * Class OtherCostDecorator
 * @package structure\decorator
 */
abstract class OtherCostDecorator extends Travel
{
    protected $travel = null;

    public function __construct(Travel $travel)
    {
        $this->travel = $travel;
    }
}