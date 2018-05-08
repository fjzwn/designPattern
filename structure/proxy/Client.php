<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午2:31
 */

declare(strict_types = 1);

namespace structure\proxy;

include_once '../../Loader.php';

$musicShop = new MusicShop();
$musicShop->buy('张学友珍藏cd');

$proxyShop = new ProxyShop();
$proxyShop->buy('张学友吻别cd');
