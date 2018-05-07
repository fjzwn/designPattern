<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/7
 * Time: 上午10:09
 */

declare(strict_types = 1);

namespace structure\fluentInterface;

include_once '../../Loader.php';

class Client
{
    public function test()
    {
        $fluent = new Fluent();
        $go = $fluent->getUser()->getCar()->go();
        echo $go . PHP_EOL;
    }
}

$client = new Client();
$client->test();