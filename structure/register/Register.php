<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午3:27
 */

declare(strict_types = 1);

namespace structure\register;

class Register
{
    private static $tree = [];

    /**
     * 获得类
     *
     * @param $alias
     * @return object
     */
    public static function get($alias)
    {
        return self::$tree[$alias];
    }

    /**
     * 设置类
     *
     * @param $alias
     * @param $obj
     */
    public static function set($alias, $obj)
    {
        self::$tree[$alias] = $obj;
    }

    /**
     * 删除类
     *
     * @param $alias
     */
    public function _unset($alias)
    {
        unset(self::$tree[$alias]);
    }
}