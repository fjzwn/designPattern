<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/4
 * Time: 下午2:58
 */

declare(strict_types = 1);

namespace structure\inversion;

class B
{
    private $a;

    public function __construct(A $a)
    {
        $this->a = $a;
    }

    public function test()
    {
        $this->a->test();
        echo __METHOD__ . '|';
    }
}