<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午2:02
 */

declare(strict_types = 1);

namespace structure\adapter;

/**
 * 适配目标: target
 *
 * Interface Pay
 * @package structure\adapter
 */
interface PayTarget
{
    public function pay();
}