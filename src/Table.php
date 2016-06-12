<?php

namespace Itav\Component\Table;

class Table extends TableElement
{
    private $elements;
    
    public function __construct()
    {
        $this->template = 'table.tpl';
    }
    
    public function getElements()
    {
        return $this->elements;
    }

    public function addElement($element)
    {
        $this->elements[] = $element;
        return $this;
    }

    public function delElement($index)
    {
        if (array_key_exists($index, $this->elements)) {
            unset($this->elements[$index]);
        }
        
        return $this;
    }
    
    public function reindexElements()
    {
        $this->elements = array_values($this->elements);
    }

    public function setElements($elements)
    {
        $this->elements = $elements;
        return $this;
    }    
}