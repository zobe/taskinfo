<?php
namespace zobe\TaskInfo;

trait TitleAndDescriptionTaskInfoTrait
{
    protected $title_TitleAndDescriptionTaskInfoTrait = '';
    protected $description_TitleAndDescriptionTaskInfoTrait = '';

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title_TitleAndDescriptionTaskInfoTrait;
    }

    /**
     * @param string $title
     */
    public function setTitle_TitleAndDescriptionTaskInfoTrait(string $title)
    {
        $this->title_TitleAndDescriptionTaskInfoTrait = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description_TitleAndDescriptionTaskInfoTrait;
    }

    /**
     * @param string $description
     */
    public function setDescription_TitleAndDescriptionTaskInfoTrait(string $description)
    {
        $this->description_TitleAndDescriptionTaskInfoTrait = $description;
    }
}
