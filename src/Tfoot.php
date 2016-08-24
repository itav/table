<?php

namespace Itav\Component\Table;

class Tfoot extends TableElement implements TableElementInterface, SectionInterface
{
    /**
     * @var RowInterface[]
     */
    private $elements = [];

    public function __construct()
    {
        $this->template = 'tfoot.twig';
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function addElement(RowInterface $element)
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

    public function setElements(array $elements)
    {
        $this->elements = $elements;
        return $this;
    }
}