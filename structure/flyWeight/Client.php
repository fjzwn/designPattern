<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午1:47
 */

declare(strict_types = 1);

namespace structure\flyWeight;

include_once '../../Loader.php';

$factory = new FlyWeightFactory();
$iPhone = $factory->getPhone('structure\flyWeight\Iphone');
$iPhone->create();

$miPhone = new MiPhone();
$miPhone->create();


