<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午1:39
 */

declare(strict_types = 1);

namespace structure\flyWeight;

/**
 * 具体手机制造类
 *
 * Class MiPhone
 * @package structure\flyWeight
 */
class MiPhone extends Phone
{
    public function create(){
        echo 'are you ok? mi fans' . PHP_EOL;
    }
}