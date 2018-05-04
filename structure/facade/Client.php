<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/4
 * Time: 下午5:15
 */

declare(strict_types = 1);

namespace structure\facade;

use structure\inversion\Container;

include_once '../../Loader.php';

$container = new Container();

$container->buyDrink = 'structure\facade\BuyDrink';
$container->buyBook = 'structure\facade\BuyFood';
$container->saleBook = 'structure\facade\SaleBook';
$container->salePen = 'structure\facade\SalePen';
$container->facade = 'structure\facade\Facade';

$facade = $container->facade;
$facade->buy();
$facade->sale();

