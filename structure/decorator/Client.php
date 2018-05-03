<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午5:01
 */

declare(strict_types = 1);

namespace structure\decorator;

include_once '../../Loader.php';

$total = new BuyGift(new GoBali());
echo $total->cost() . PHP_EOL;
