<?php

namespace Itav\Component\Table;

class Th extends TableElement
{
    protected $colspan;
    protected $rowspan;
    protected $content;


    public function __construct($content = null)
    {
        $this->content = $content;
        $this->template = 'th.twig';
    }

    function getColspan()
    {
        return $this->colspan;
    }

    function getRowspan()
    {
        return $this->rowspan;
    }

    function setColspan($colspan)
    {
        $this->colspan = $colspan;
        return $this;
    }

    function setRowspan($rowspan)
    {
        $this->rowspan = $rowspan;
        return $this;
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