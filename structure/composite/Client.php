<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/4/25
 * Time: 下午2:49
 */

namespace structure\composite;

include_once '../../Loader.php';

// 目录结构
/*
home
├─text1.txt
├─bg1.png
├─video1.mp4
├─source
│  ├─text2.txt
*/

$dir = new Dir('home');

$dir->add(new TextFile('text1.txt'));
$dir->add(new ImageFile('bg1.png'));
$dir->add(new VideoFile('video1.mp4'));

$subDir = new Dir('source');
$dir->add($subDir);
$subDir->add(new TextFile('text2.txt'));

echo $dir->getName() . "大小:{$dir->getSize()}" . PHP_EOL;
