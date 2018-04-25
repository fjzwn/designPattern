<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/4/25
 * Time: 下午2:46
 */
declare(strict_types = 1);

namespace structure\compositePattern;

class Dir extends Filesystem
{
    private $filesystems = [];

    /**
     * 组合对象必须实现添加方法，文件和目录都能添加
     *
     * @param Filesystem $filesystem
     */
    public function add(Filesystem $filesystem)
    {
        $key = array_search($filesystem, $this->filesystems);

        if ($key === false) {
            $this->filesystems[] = $filesystem;
        }
    }

    /**
     * 组合对象必须实现删除方法
     *
     * @param Filesystem $filesystem
     */
    public function remove(Filesystem $filesystem)
    {
        $key = array_search($filesystem, $this->filesystems);

        if ($key !== false) {
            unset($this->filesystems[$key]);
        }
    }

    /**
     * 获取总大小
     *
     * @return int
     */
    public function getSize(): int
    {
        $size = 0;
        foreach ($this->filesystems as $filesystem) {
            $size += $filesystem->getSize();
        }

        return $size;
    }

    /**
     * 返回目录名称
     *
     * @return string
     */
    public function getName(): string
    {
        return "目录:{$this->name}";
    }
}