<?php
namespace zobe\TaskInfo;

trait LifeTimeTaskInfoTrait
{
    protected $startTime_LifeTimeTaskInfoTrait;
    protected $endTime_LifeTimeTaskInfoTrait;

    /**
     *
     *
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime_LifeTimeTaskInfoTrait;
    }

    /**
     * do not use
     *
     * use it if you implements task info sender
     * @param mixed $startTime_LifeTimeTaskInfoTrait
     */
    public function setStartTime_LifeTimeTaskInfoTrait($startTime_LifeTimeTaskInfoTrait = null)
    {
        if( is_null($startTime_LifeTimeTaskInfoTrait) )
            $startTime_LifeTimeTaskInfoTrait = microtime(true);
        $this->startTime_LifeTimeTaskInfoTrait = $startTime_LifeTimeTaskInfoTrait;
    }

    /**
     *
     *
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime_LifeTimeTaskInfoTrait;
    }

    /**
     * do not use
     *
     * use it if you implements task info sender.
     * use it before promise->success() or fail().
     *
     * @param mixed $endTime_LifeTimeTaskInfoTrait
     */
    public function setEndTimeLife_TimeTaskInfoTrait($endTime_LifeTimeTaskInfoTrait = null)
    {
        if( is_null($endTime_LifeTimeTaskInfoTrait) )
            $endTime_LifeTimeTaskInfoTrait = microtime(true);
        $this->endTime_LifeTimeTaskInfoTrait = $endTime_LifeTimeTaskInfoTrait;
    }
}

