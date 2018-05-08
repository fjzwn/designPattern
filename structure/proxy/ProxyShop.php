<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午2:29
 */

declare(strict_types = 1);

namespace structure\proxy;

/**
 * 代理类
 *
 * Class ProxyShop
 * @package structure\proxy
 */
class ProxyShop extends Shop
{
    public function buy($name)
    {
        $this->proxy();
        $musicShop = new MusicShop();
        $musicShop->buy($name);
    }

    public function proxy()
    {
        echo "委托代购";
    }
}