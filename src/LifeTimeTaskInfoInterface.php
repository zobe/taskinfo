<?php
namespace zobe\TaskInfo;

interface LifeTimeTaskInfoInterface
{
    /**
     *
     *
     * @return float
     */
    public function getStartTime();

    /**
     * do not use
     *
     * use it if you implements task info sender
     * @param float $startTime_LifeTimeTaskInfoTrait
     */
    public function setStartTime_LifeTimeTaskInfoTrait($startTime_LifeTimeTaskInfoTrait = null);

    /**
     *
     *
     * @return float
     */
    public function getEndTime();

    /**
     * do not use
     *
     * use it if you implements task info sender.
     * use it before promise->success() or fail().
     *
     * @param float $endTime_LifeTimeTaskInfoTrait
     */
    public function setEndTimeLife_TimeTaskInfoTrait($endTime_LifeTimeTaskInfoTrait = null);
}

