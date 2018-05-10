<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午10:21
 */

declare(strict_types = 1);

namespace create\simpleFactory;

class VehicleFactory
{
    public static function build($vehicle = null)
    {
        $vehicle = ucfirst($vehicle);
        if ($vehicle) {
            return new $vehicle;
        }
        return null;
    }
}