<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午5:13
 */

declare(strict_types = 1);

namespace structure\bridge;

include_once '../../Loader.php';

$kar = new Kar();
$awm = new Awm();

$jack = new Jack($kar);
echo $jack->fire();

$mike = new Mike($awm);
echo $mike->fire();
