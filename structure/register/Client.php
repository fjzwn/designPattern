<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/8
 * Time: 下午3:32
 */

declare(strict_types = 1);

namespace structure\register;

include_once '../../Loader.php';

$register = new Register();

$go = new Go();

// 可以通过工厂设置类
$register::set('go', $go);

print_r($register::get('go')->go());