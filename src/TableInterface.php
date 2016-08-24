<?php

namespace Itav\Component\Table;


/**
 * Interface for elements like: Table
 *
 * Interface TableInterface
 * @package Itav\Component\Table
 */
interface TableInterface
{
    /**
     * @return TestInterface[]
     */
    public function getElements();

    /**
     * arguments: section or row
     *
     * @param TestInterface $element
     * @return self
     */
    public function addElement(TestInterface $element);

    /**
     * @param TestInterface[] $elements
     * @return self
     */
    public function setElements(array $elements);
}