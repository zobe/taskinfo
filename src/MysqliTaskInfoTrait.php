<?php
namespace zobe\TaskInfo;

/**
 * Default implementation of MysqliTaskInfoInterface
 *
 * Trait MysqliTaskInfoTrait
 */
trait MysqliTaskInfoTrait
{
    protected $mysqli_MysqliTaskInfoTrait = null;

    /**
     * @return \mysqli|null
     */
    public function getMysqli()
    {
        return $this->mysqli_MysqliTaskInfoTrait;
    }

    /**
     * @param \mysqli $mysqli_MysqliTaskInfoTrait
     */
    public function setMysqli_MysqliTaskInfoTrait(\mysqli $mysqli)
    {
        $this->mysqli_MysqliTaskInfoTrait = $mysqli;
    }
}


