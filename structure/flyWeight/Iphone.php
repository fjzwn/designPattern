<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午1:41
 */

declare(strict_types = 1);

namespace structure\flyWeight;

/**
 * 具体手机方法
 *
 * Class Iphone
 * @package structure\flyWeight
 */
class Iphone extends Phone
{
    public function create()
    {
        echo 'Iphone' . PHP_EOL;
    }
}