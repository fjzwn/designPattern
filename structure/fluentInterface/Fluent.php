<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/7
 * Time: 上午10:02
 */

declare(strict_types = 1);

namespace structure\fluentInterface;

class Fluent
{
    private $go = '';


    public function getUser()
    {
        $users = ['你', '我', '他'];
        $this->go .= $users[rand(0,2)];

        return $this;
    }

    public function getCar()
    {
        $cars = ['开奥拓', '开奥迪', '开坦克'];
        $this->go .= $cars[rand(0,2)];

        return $this;
    }

    public function go()
    {
        $countries = ['去中国', '去日本', '去新加坡'];
        $this->go .= $countries[rand(0,2)];

        return $this->go;
    }
}