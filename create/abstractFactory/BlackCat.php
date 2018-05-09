<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/9
 * Time: 下午2:30
 */

declare(strict_types = 1);

namespace create\abstractFactory;

class BlackCat extends Cat
{
    public function create()
    {
        echo '造了一只黑猫' . PHP_EOL;
    }
}