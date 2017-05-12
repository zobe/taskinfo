<?php

require_once( __DIR__ . '/src/TaskInfo.php' );
require_once( __DIR__ . '/src/CancelableTaskInfoInterface.php' );
require_once( __DIR__ . '/src/CancelableTaskInfoTrait.php' );
require_once( __DIR__ . '/src/ExceptionSuppressedTaskInfoInterface.php' );
require_once( __DIR__ . '/src/ExceptionSuppressedTaskInfoTrait.php' );
require_once( __DIR__ . '/src/LifeTimeTaskInfoInterface.php' );
require_once( __DIR__ . '/src/LifeTimeTaskInfoTrait.php' );
require_once( __DIR__ . '/src/MysqliTaskInfoInterface.php' );
require_once( __DIR__ . '/src/MysqliTaskInfoTrait.php' );
require_once( __DIR__ . '/src/TaskInfo.php' );

class MyTaskInfo implements \zobe\TaskInfo\CancelableTaskInfoInterface, \zobe\TaskInfo\ExceptionSuppressedTaskInfoInterface, \zobe\TaskInfo\LifeTimeTaskInfoInterface, \zobe\TaskInfo\MysqliTaskInfoInterface
{
    use \zobe\TaskInfo\CancelableTaskInfoTrait;
    use \zobe\TaskInfo\ExceptionSuppressedTaskInfoTrait;
    use \zobe\TaskInfo\LifeTimeTaskInfoTrait;
    use \zobe\TaskInfo\MysqliTaskInfoTrait;
}


