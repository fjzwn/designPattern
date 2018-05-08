<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午1:35
 */

declare(strict_types = 1);

namespace structure\flyWeight;

/**
 * 抽象手机类
 *
 * Class Phone
 * @package structure\flyWeight
 */
abstract class Phone
{
    abstract public function create();
}