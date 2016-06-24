<?php

namespace Itav\Component\Table;

class Action
{
    protected $label;
    protected $link;
    protected $on;


    public function __construct($content = null)
    {
        $this->content = $content;
        $this->template = 'td.tpl';
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