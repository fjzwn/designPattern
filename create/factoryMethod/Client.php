<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/10
 * Time: 上午11:29
 */

declare(strict_types = 1);

namespace create\factoryMethod;

include_once '../../Loader.php';

$catFactory = new CatFactory();
$catFactory->create()->create();