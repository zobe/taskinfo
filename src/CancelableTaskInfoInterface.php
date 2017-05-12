<?php
namespace zobe\TaskInfo;

interface CancelableTaskInfoInterface
{
    /**
     * If you call it, the running task may stop.
     */
    public function orderCancel();

    /**
     * Do not use except if you develop the task and need a canceling trigger.
     *
     * @return bool
     */
    public function isCancelOrdered_CancelableTaskInfoTrait(): bool;
}


