<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午6:05
 */

declare(strict_types = 1);

namespace structure\inversion;

class Ioc
{
    protected static $register = [];

    /**
     * 绑定
     *
     * @param $name
     * @param callable $resolver
     * @return bool
     */
    public static function bind($name, Callable $resolver)
    {
        if (!static::$register[$name]) {
            static::$register[$name] = $resolver;
        }

        return true;
    }

    /**
     * @param $name
     * @return mixed
     * @throws \Exception
     */
    public static function make($name)
    {
        if (isset(static::$register[$name])) {
            $resolver = static::$register[$name];
            return $resolver();
        }
        throw new \Exception("{$name}未绑定到容器");
    }
}