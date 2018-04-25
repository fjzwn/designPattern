<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/4/25
 * Time: 下午3:59
 */

define('ENTER', __DIR__ . '/');
spl_autoload_register('autoLoad');

// 自动加载函数
function autoLoad($className)
{
    $class = str_replace('\\', '/', $className);
    $file = ENTER . $class . '.php';

    include_once $file;
}