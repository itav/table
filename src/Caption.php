<?php

namespace Itav\Component\Table;

class Caption extends TableElement
{
    protected $content;

    public function __construct($content = null)
    {
        $this->content = $content;
        $this->template = 'caption.twig';
    }

    function getContent()
    {
        return $this->content;
    }

    function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}