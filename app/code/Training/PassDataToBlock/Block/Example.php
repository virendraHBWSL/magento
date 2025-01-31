<?php
namespace Training\PassDataToBlock\Block;

use Magento\Framework\View\Element\Template;

class Example extends Template
{
    protected $topic;

    /**
     * Set topic data
     *
     * @param string $topic
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
        return $this;
        
    }

    /**
     * Get topic data
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }
}