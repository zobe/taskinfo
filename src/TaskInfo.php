<?php
namespace zobe\TaskInfo;

require_once( __DIR__ . '/TitleAndDescriptionTaskInfoInterface.php' );
require_once( __DIR__ . '/TitleAndDescriptionTaskInfoTrait.php' );

class TaskInfo implements TitleAndDescriptionTaskInfoInterface
{
    use TitleAndDescriptionTaskInfoTrait;
}


