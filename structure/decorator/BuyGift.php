<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午4:59
 */

declare(strict_types = 1);

namespace structure\decorator;

class BuyGift extends OtherCostDecorator
{
    /**
     * 装饰
     *
     * @return string
     */
    public function cost()
    {
        $buyCost = '买礼物用了:3000元';
        return $this->travel->cost() . ",$buyCost";
    }
}