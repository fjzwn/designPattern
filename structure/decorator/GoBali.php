<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午4:51
 */

declare(strict_types = 1);

namespace structure\decorator;

/**
 * 旅行具体实现,具体被装饰对象
 *
 * Class GoBali
 * @package structure\decorator
 */
class GoBali extends Travel
{
    /**
     * 旅行基本花销
     *
     * @return int
     */
    public function cost()
    {
        return '去巴厘岛基本花销:10000元';
    }
}