<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 下午3:06
 */

declare(strict_types = 1);

namespace structure\dataMapper;

class UserMapper extends Mapper
{
    const INSERT_INTO = "insert into test (name) values (:name, :address)";

    public function __construct()
    {
        $this->conn = Db::getInstance();
    }

    /**
     * 可以重写save
     *
     * @param Table $userTable
     * @return bool
     */
    public function create(Table $userTable)
    {
        $result = $this->conn->executeArr(self::INSERT_INTO, $userTable->toArray());

        return $result;
    }
}