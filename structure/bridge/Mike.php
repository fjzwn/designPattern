<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午5:03
 */

declare(strict_types = 1);

namespace structure\bridge;

/**
 * 具体实现角色
 *
 * Class Mike
 * @package structure\bridge
 */
class Mike extends Player
{
    protected $name = 'Mike';

    public function fire()
    {
        return "{$this->name}{$this->gun->fire()}";
    }
}