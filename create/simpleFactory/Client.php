<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午10:23
 */

declare(strict_types = 1);

namespace create\simpleFactory;

include_once '../../Loader.php';

$factory = new VehicleFactory();
$car = $factory::build('create\simpleFactory\Car');
$airplane = $factory::build('create\simpleFactory\Airplane');

$car->drive();
$airplane->drive();
