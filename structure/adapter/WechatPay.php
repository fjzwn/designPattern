<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午2:27
 */

declare(strict_types = 1);

namespace structure\adapter;

/**
 * 被适配角色: adaptee
 *
 * Class WechatPay
 * @package structure\adapter
 */
class WechatPay
{
    public function pay()
    {
        echo "使用微信支付" . PHP_EOL;
    }
}