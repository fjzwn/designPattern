<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午6:15
 */

namespace structure\dataMapper;

include_once '../../Loader.php';

define('HOST', '127.0.0.1');
define('USER', 'homestead');
define('PASSWORD', 'secret');
define('DB', 'lianbit');

class Client
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function execute($sql)
    {
        return $this->db->exce($sql, [1]);
    }
}

//$client = new Client();
//$sql = "select * from user where is_admin = ?";
//$sql = "update user set is_admin= 1 where id=2";
//$sql = "insert into test SET name=zwn";
//$count = $client->execute($sql);
//print_r($count);

//print_r($client->execute($sql));
$userTable = new UserTable();
$userTable->setName('haha');
$userMapper = new UserMapper();
$userMapper->save($userTable);