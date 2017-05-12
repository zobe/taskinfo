<?php
namespace zobe\TaskInfo;

interface TitleAndDescriptionTaskInfoInterface
{
    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     */
    public function setTitle_TitleAndDescriptionTaskInfoTrait(string $title);

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     */
    public function setDescription_TitleAndDescriptionTaskInfoTrait(string $description);
}
