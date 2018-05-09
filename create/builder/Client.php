<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午3:05
 */

declare(strict_types = 1);

namespace create\builder;

include_once '../../Loader.php';

$director = new Director();
$jointCar = $director->create(new JointCar());
$jointCar->show();