<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 上午10:29
 */

declare(strict_types = 1);

namespace structure\dataMapper;

/**
 * 抽象数据映射
 *
 * Class Table
 * @package structure\dataMapper
 */
abstract class Table
{
    /**
     * 基于set* get*的方法 设置*字段
     *
     * @param $method
     * @param $args
     * @return mixed
     * @throws \Exception
     */
    public function __call($method, $args)
    {
        if (preg_match('/^(get|set)(\w+)/', $method, $match)
            && $attribute = $this->validateAttribute($match[2])) {
            if ('get' == $match[1]) {
                return $this->$attribute;
            } else {
                $this->$attribute = $args[0];
            }
        } else {
            throw new \Exception('Call to undefined method ' . __CLASS__ . '::' . $method . '()');
        }
    }

    /**
     * 字段验证
     *
     * @param $attribute
     * @return string
     */
    protected function validateAttribute($attribute)
    {
        if (in_array(lcfirst($attribute), array_keys(get_class_vars(get_class($this))))) {
            return lcfirst($attribute);
        }
    }
}