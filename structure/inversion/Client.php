<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午6:06
 */

declare(strict_types = 1);

namespace structure\inversion;

include_once '../../Loader.php';

$container = new Container();

$container->a = 'structure\inversion\A';
$container->b = 'structure\inversion\B';
$container->c = 'structure\inversion\C';


//$container->b = function ($container) {
//    return new B($container->a);
//};


$c = $container->c;
$c->test();