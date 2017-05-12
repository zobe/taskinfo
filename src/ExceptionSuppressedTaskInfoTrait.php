<?php
namespace zobe\TaskInfo;

/**
 * Default implementation of MysqliTaskInfoInterface
 *
 * Trait ExceptionSuppressedTaskInfoTrait
 */
trait ExceptionSuppressedTaskInfoTrait
{
    /**
     * @var \Throwable|null
     */
    protected $suppressedException_ExceptionSuppressedTaskInfoTrait = null;

    /**
     * Get an exception(Throwable) which the message sender suppressed
     *
     * @return \Throwable
     */
    public function getSuppressedException()
    {
        return $this->suppressedException_ExceptionSuppressedTaskInfoTrait;
    }

    /**
     * Do not use except if you are the message sender
     *
     * @param \Throwable|null $suppressedException
     */
    public function setSuppressedException_ExceptionSuppressedTaskInfoTrait( \Throwable $suppressedException)
    {
        $this->suppressedException_ExceptionSuppressedTaskInfoTrait = $suppressedException;
    }
}


