<?php

namespace Itav\Component\Table;


interface TableInterface
{
    /**
     * @return TableElementInterface[]
     */
    public function getElements();

    /**
     * @param TableElementInterface $element
     * @return self
     */
    public function addElement($element);

    /**
     * @param TableElementInterface[] $elements
     * @return self
     */
    public function setElements($elements);
}