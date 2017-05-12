<?php
namespace zobe\TaskInfo;

interface ExceptionSuppressedTaskInfoInterface
{
    public function getSuppressedException();
    public function setSuppressedException_ExceptionSuppressedTaskInfoTrait( \Throwable $suppressedException);
}



