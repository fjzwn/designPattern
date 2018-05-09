<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:38
 */

declare(strict_types = 1);

namespace create\abstractFactory;

include_once '../../Loader.php';

$blackAnimalFactory = new BlackAnimalFactory();
$blackAnimalFactory->createCat();

$whiteAnimalFactory = new WhiteAnimalFactory();
$whiteAnimalFactory->createDog();