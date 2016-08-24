<?php

namespace Itav\Component\Table;

class Table extends TableElement implements TableElementInterface, TableInterface
{
    /**
     * @var RowInterface[] | SectionInterface[] | TableElementInterface[]
     */
    private $elements = [];


    /**
     * Table constructor.
     */
    public function __construct()
    {
        $this->template = 'table.twig';
    }

    /**
     * @return RowInterface[]|SectionInterface[]|TableElementInterface[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param TestInterface $element
     * @return $this
     */
    public function addElement(TestInterface $element)
    {
        $this->elements[] = $element;
        return $this;
    }

    /**
     * @param $index
     * @return $this
     */
    public function delElement($index)
    {
        if (array_key_exists($index, $this->elements)) {
            unset($this->elements[$index]);
        }

        return $this;
    }

    /**
     *
     */
    public function reindexElements()
    {
        $this->elements = array_values($this->elements);
    }

    /**
     * @param array $elements
     * @return $this
     */
    public function setElements(array $elements)
    {
        $this->elements = $elements;
        return $this;
    }
}