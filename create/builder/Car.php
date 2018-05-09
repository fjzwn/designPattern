<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:51
 */

declare(strict_types = 1);

namespace create\builder;

/**
 * product
 *
 * Class Car
 * @package create\builder
 */
class Car
{
    public $engine;
    public $window;

    public function show()
    {
        echo "引擎:$this->engine" . PHP_EOL;
        echo "窗户:$this->window" . PHP_EOL;
    }
}