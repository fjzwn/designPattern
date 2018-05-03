<?php
/**
 * Created by PhpStorm.
 * User: cengweinan
 * Date: 18/5/2
 * Time: 下午6:01
 */

declare(strict_types = 1);

namespace structure\dataMapper;

/**
 * PDO封装
 *
 * Class Db
 * @package structure\dataMapper
 */
class Db
{
    public static $db = null;
    private $_dbh = null;

    private function __construct($host, $user, $password, $db)
    {
        try {
            $this->_dbh = new \PDO("mysql:dbname=$db;host=$host", $user, $password);
        } catch (\PDOException $e) {
            throw $e;
        }
    }

    /**
     * 实例化Db类
     *
     * @return Db|null
     */
    public static function getInstance()
    {
        if (self::$db === null) {
            self::$db = new self(HOST, USER, PASSWORD, DB);
        }

        return self::$db;
    }

    /**
     * 禁止克隆对象
     */
    private function __clone(){}

    /**
     * 禁止重建对象
     */
    private function __wakeup(){}


    /**
     * 获得单个数据
     *
     * @param $sql
     * @return bool|mixed
     * @throws \Exception
     */
    public function getOne($sql)
    {
        try {
            $rs = $this->_dbh->query($sql);
            $result = $rs->fetch(\PDO::FETCH_ASSOC);
            if (!empty($result)) {
                return $result;
            }
        } catch (\PDOException $e) {
            throw new \Exception($this->_dbh->errorInfo());
        }

        return false;
    }

    /**
     * 获得多个数据
     *
     * @param $sql
     * @return array|bool
     * @throws \Exception
     */
    public function getAll($sql)
    {
        try {
            $rs = $this->_dbh->query($sql);
            $result = $rs->fetchAll(\PDO::FETCH_ASSOC);
            if (!empty($result)) {
                return $result;
            }
        } catch (\PDOException $e) {
            throw new \Exception($this->_dbh->errorInfo());
        }

        return false;
    }

    /**
     * 返回受影响行数
     *
     * @param $sql
     * @return int
     * @throws \Exception
     */
    public function exec($sql)
    {
        try {
            $exec = $this->_dbh->exec($sql);
        } catch (\Exception $e) {
            throw new \Exception($this->_dbh->errorInfo());
        }

        return $exec;
    }

    /**
     * 预处理 不关注arr键值
     *
     * @param $sql
     * @param $arr
     * @return bool
     * @throws \Exception
     */
    public function executeArr($sql, $arr)
    {
        try {
            $sth = $this->_dbh->prepare($sql);
            $result = $sth->execute($arr);
            if ($result) {
                return $this->getExecuteResult($sql, $sth);
            }
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage() . $this->_dbh->errorInfo());
        }

        return false;
    }

    /**
     * 预处理 关注arr键值
     *
     * @param $sql
     * @param $arr
     * @return bool|mixed
     * @throws \Exception
     */
    public function executeAsoc($sql, $arr)
    {
        try {
            $array = [];
            foreach ($arr as $key => $v) {
                if (strpos($sql, ':' . $key) !== false) {
                    $array[":$key"] = $v;
                }
            }

            $sth = $this->_dbh->prepare($sql);
            $result = $sth->execute($array);
            if ($result) {
                return $this->getExecuteResult($sql, $sth);
            }

        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage() . $this->_dbh->errorInfo());
        }

        return false;
    }

    /**
     * 获取返回结果集
     *
     * @param $sql
     * @param $sth
     * @return mixed
     */
    private function getExecuteResult($sql, $sth) {
        $type = strtolower(substr(trim($sql), 0, 6));
        switch ($type) {
            case 'update': case 'delete':
                $result = $sth->rowCount();
                break;
            case 'insert':
                $result = $this->getLastId();
                break;
            case 'select':
                $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
                break;
            default:
                $result = [];
                break;
        }
        return $result;
    }

    /**
     * 开始事务
     *
     * @return bool
     */
    public function beginTransaction()
    {
        return $this->_dbh->beginTransaction();
    }

    /**
     * 提交事务
     *
     * @return bool
     */
    public function commit()
    {
        return $this->_dbh->commit();
    }

    /**
     * 回滚
     *
     * @return bool
     */
    public function rollBack()
    {
        return $this->_dbh->rollBack();
    }

    /**
     * 获得插入的id
     *
     * @return string
     */
    public function getLastId()
    {
        return $this->_dbh->lastInsertId();
    }
}