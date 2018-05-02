<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午2:17
 */


declare(strict_types = 1);

namespace structure\adapter;

include_once '../../Loader.php';

// 使用组件的适配器模式
$aliPay = new AliPay();
$aliPayAdapter = new AliPayAdapter($aliPay);
$aliPayAdapter->pay();

// 使用继承的适配器模式
$wechatPayAdapter = new WechatPayAdapter();
$wechatPayAdapter->pay();
