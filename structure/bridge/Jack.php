<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午4:58
 */

declare(strict_types = 1);

namespace structure\bridge;

/**
 * 具体化角色
 *
 * Class Jack
 * @package structure\bridge
 */
class Jack extends Player
{
    protected $name = 'Jack';

    public function fire()
    {
       return "{$this->name}{$this->gun->fire()}";
    }
}