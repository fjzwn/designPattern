<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/4/25
 * Time: 下午3:29
 */

declare(strict_types = 1);

namespace structure\compositePattern;

class ImageFile extends Filesystem
{
    /**
     * 独立对象大小
     *
     * @return int
     */
    public function getSize(): int
    {
        return 50;
    }

    /**
     * 独立对象名称
     *
     * @return string
     */
    public function getName(): string
    {
        return "图片名称:$this->name";
    }
}