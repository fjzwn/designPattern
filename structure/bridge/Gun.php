<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午5:07
 */

declare(strict_types = 1);

namespace structure\bridge;

/**
 * 实现化角色 功能实现者
 *
 * Class Gun
 * @package structure\bridge
 */
abstract class Gun
{
    abstract function fire();
}