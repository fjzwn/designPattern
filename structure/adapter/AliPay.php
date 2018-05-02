<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午2:08
 */

declare(strict_types = 1);

namespace structure\adapter;

/**
 * 被适配角色: adaptee
 *
 * Class AliPay
 * @package structure\adapter
 */
class AliPay
{
    public function pay()
    {
        echo "使用支付宝支付" . PHP_EOL;
    }
}