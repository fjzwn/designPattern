<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/4/25
 * Time: 下午2:01
 */

declare(strict_types = 1);

namespace structure\composite;

abstract class Filesystem
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public abstract function getName(): string;
    public abstract function getSize(): int;
}