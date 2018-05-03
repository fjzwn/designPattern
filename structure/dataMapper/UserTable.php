<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/3
 * Time: 上午10:57
 */

declare(strict_types = 1);

namespace structure\dataMapper;

/**
 * 数据映射到表 一般由工具生成
 *
 * Class UserTable
 * @package structure\dataMapper
 */
class UserTable extends Table
{
    /**
     * fields
     *
     * @var null
     */
    protected $uid = null;
    protected $name = null;
    protected $address = null;

    public $table = 'test';

    public  $primaryKey = 'uid';

    public static $fields = [
        'uid',
        'name',
        'address'
    ];

    /**
     * 对象转数据
     *
     * @return array
     */
    public function toArray()
    {
        $arr = [];

        foreach (UserTable::$fields as $field) {
            $getMethod = 'get' . ucwords($field);
            $value = $this->$getMethod();
            if ($value !== null) {
                $arr[$field] = $value;
            }
        }

        return $arr;
    }

    /**
     * 数据转对象
     *
     * @param $arr
     * @return $this
     */
    public function toObj($arr){
        if (!$arr) {
            return $this;
        }
        foreach (UserTable::$fields as $filed) {
            $setMethod  = 'set' . ucwords($filed);
            $this->$setMethod($arr[$filed]);
        }
        return $this;
    }
}