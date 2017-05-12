<?php
namespace zobe\TaskInfo;

trait CancelableTaskInfoTrait
{
    protected $cancelOrderedFlag_CancelableTaskInfoTrait = false;

    /**
     * If you call it, the running task may stop.
     */
    public function orderCancel()
    {
        $this->cancelOrderedFlag_CancelableTaskInfoTrait = true;
    }

    /**
     * Do not use except if you develop the task and need a canceling trigger.
     *
     * @return bool
     */
    public function isCancelOrdered_CancelableTaskInfoTrait(): bool
    {
        return $this->cancelOrderedFlag_CancelableTaskInfoTrait;
    }
}


