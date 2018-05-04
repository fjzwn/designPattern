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
    private $people;

    public function __construct(A $a, $people = 'my')
    {
        $this->a = $a;
        $this->people = $people;
    }

    public function test()
    {
        $this->a->test();
        echo __METHOD__ . '|' . "普通参数:{$this->people}|";
    }
}