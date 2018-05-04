<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/4
 * Time: 上午11:33
 */

declare(strict_types = 1);

namespace structure\inversion;

class Container
{
    private $s = [];

    public function __set($k, $c)
    {
        $this->s[$k] = $c;
    }

    public function __get($k)
    {
        return $this->build($this->s[$k]);
    }

    /**
     * 获得类的实例
     *
     * @param $className
     * @return mixed|object
     * @throws \Exception
     */
    public function build($className)
    {
        if ($className instanceof \Closure) {
            return $className($this);
        }

        $reflector = new \ReflectionClass($className);

        // 是否可实例化
        if (!$reflector->isInstantiable()) {
            throw new \Exception(ucfirst($className) . '不能被实例化');
        }

        $construct = $reflector->getConstructor();

        // 无构造函数直接实例化
        if (is_null($construct)) {
            return $reflector->newInstance();
        }

        $params = $construct->getParameters();

        $dependencies = $this->getDependencies($params);

        return $reflector->newInstanceArgs($dependencies);
    }


    /**
     * 获得依赖
     *
     * @param $params
     * @return array
     */
    public function getDependencies($params)
    {
        $dependencies = [];

        foreach ($params as $param) {
            $dependency = $param->getClass();

            if (is_null($dependency)) {
                $dependencies[] = $this->resolveNonClass($param);
            } else {
                // 是类就递归解析
                $dependencies[] = $this->build($dependency->name);
            }
        }

        return $dependencies;
    }

    /**
     * 普通参数获得默认值,没有默认值抛出异常
     *
     * @param $param
     * @return mixed
     * @throws \Exception
     */
    public function resolveNonClass($param)
    {
        if ($param->isDefaultValueAvailable()) {
            return $param->getDefaultValue();
        }

        throw new \Exception('参数没有默认值');
    }
}