<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 上午11:36
 */

declare(strict_types = 1);

namespace structure\dataMapper;

class Mapper
{
    protected $conn = null;

    /**
     * 保存单个数据
     *
     * @param Table $table
     * @return mixed
     */
    public function save(Table $table)
    {
        $arr = $table->toArray();
        $set = '';
        if (!empty($arr)) {
            foreach ($arr as $field => $value) {
                if ($set) $set .= ',';
                $set .= $field . "='$value'";
            }
        }

        if ($set) {
            $this->conn->exec("insert into {$table->table} set $set");
            return $this->conn->getLastId();
        }
    }

    /**
     * 更新数据
     *
     * @param Table $table
     * @return mixed
     */
    public function update(Table $table)
    {
        $arr = $table->toArray();
        $set = '';
        if (!empty($arr)) {
            foreach ($arr as $field => $value) {
                if ($set) $set .= ',';
                $set .= $field . "='$value'";
            }
        }

        $primary = 'get' . ucwords($table->primaryKey);
        if ($set) {
            return $this->conn->exce("update {$this->tableName} set $set where {$table->primaryKey}='{$table->$primary()}'");
        }
    }
}