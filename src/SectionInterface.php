<?php


namespace Itav\Component\Table;

/**
 * Interface for elements like: Thead, Tbody, Tfoot
 *
 * Interface SectionInterface
 * @package Itav\Component\Table
 */

interface SectionInterface extends TestInterface
{
    /**
     * @return RowInterface[]
     */
    public function getElements();

    /**
     * @param RowInterface $element
     * @return self
     */
    public function addElement(RowInterface $element);

    /**
     * @param RowInterface[] $elements
     * @return self
     */
    public function setElements(array $elements);
}