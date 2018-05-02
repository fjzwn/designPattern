<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午2:11
 */

declare(strict_types = 1);

namespace structure\adapter;

/**
 * 使用组件的适配器模式
 *
 * Class AliPayAdapter
 * @package structure\adapter
 */
class AliPayAdapter implements PayTarget
{
    protected $aliPay;

    public function __construct(AliPay $aliPay)
    {
        $this->aliPay = $aliPay;
    }


    public function pay()
    {
        $this->aliPay->pay();
    }
}