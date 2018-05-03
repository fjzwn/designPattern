<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午4:54
 */

declare(strict_types = 1);

namespace structure\bridge;

/**
 * 抽象化角色
 *
 * Class Player
 * @package structure\bridge
 */
abstract class Player
{
    protected $gun;

    abstract function fire();

    public function __construct(Gun $gun)
    {
        $this->gun = $gun;
    }
}