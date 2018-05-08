<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午2:28
 */

declare(strict_types = 1);

namespace structure\proxy;

/**
 * 商店具体实现
 *
 * Class MusicShop
 * @package structure\proxy
 */
class MusicShop extends Shop
{
    public function buy($name)
    {
        echo "买到了$name" . PHP_EOL;
    }
}