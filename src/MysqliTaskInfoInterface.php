<?php
namespace zobe\TaskInfo;



interface MysqliTaskInfoInterface
{
    /**
     * Get a mysqli object which is mainly for reference status and errors only.
     *
     * @return \mysqli|null
     */
    public function getMysqli();

    /**
     * Do not use except if you are a developer of Tasks.
     *
     * @param \mysqli $mysqli
     * @return mixed
     */
    public function setMysqli_MysqliTaskInfoTrait(\mysqli $mysqli);
}



