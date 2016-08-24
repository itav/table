<?php

namespace Itav\Component\Table;

class Colgroup extends TableElement implements TableInterface, TableElementInterface
{
    private $span;
    /**
     * @var TableElementInterface[]
     */
    private $elements = [];

    public function __construct()
    {
        $this->template = 'colgroup.twig';
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

    /**
     * @return mixed
     */
    public function getSpan()
    {
        return $this->span;
    }

    /**
     * @param mixed $span
     * @return Colgroup
     */
    public function setSpan($span)
    {
        $this->span = $span;
        return $this;
    }


}