<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/4
 * Time: 下午2:58
 */

declare(strict_types = 1);

namespace structure\inversion;

class C
{
    private $b;

    public function __construct(B $b)
    {
        $this->b = $b;
    }

    public function test()
    {
        $this->b->test();
        echo __METHOD__ . '|';
    }
}