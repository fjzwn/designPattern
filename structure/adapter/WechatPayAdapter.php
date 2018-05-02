<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午2:26
 */

declare(strict_types = 1);

namespace structure\adapter;

/**
 * 使用继承的适配器模式
 *
 * Class WechatPayAdapter
 * @package structure\adapter
 */
class WechatPayAdapter extends WechatPay implements PayTarget
{

}