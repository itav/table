<?php

namespace Itav\Component\Table;

class Tr extends TableElement
{
    protected $colspan;
    protected $rowspan;
    protected $content;
    protected $elements = [];
    
    public function __construct($elements = [])
    {
        $this->template = 'tr.tpl';
        $this->setElements($elements);
    }

    public function getElements() {
        return $this->elements;
    }

    public function addElement($element) {
        $this->elements[] = $element;
        return $this;
    }
    
    public function delElement($index)
    {
        if (array_key_exists($index, $this->elements)){
            unset($this->elements[$index]);
        }
        return $this;
    }    
    
    public function reindexElements()
    {
        $this->elements = array_values($this->elements);
    }    

    public function setElements(array $elements) {
        $this->elements = $elements;
        return $this;
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