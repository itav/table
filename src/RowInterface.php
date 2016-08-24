<?php

namespace Itav\Component\Table;

/**
 * Interface for elements like: Tr
 *
 * Interface RowInterface
 * @package Itav\Component\Table
 */
interface RowInterface extends TestInterface
{
    /**
     * @return CellInterface[]
     */
    public function getElements();

    /**
     * @param CellInterface $element
     * @return self
     */
    public function addElement(CellInterface $element);

    /**
     * @param CellInterface[] $elements
     * @return self
     */
    public function setElements(array $elements);

    /**
     * @return mixed
     */
    function getColspan();

    /**
     * @return mixed
     */
    function getRowspan();

    /**
     * @param $colspan
     * @return self
     */
    function setColspan($colspan);

    /**
     * @param $rowspan
     * @return self
     */
    function setRowspan($rowspan);

    /**
     * @return mixed
     */
    function getContent();

    /**
     * @param $content
     * @return self
     */
    function setContent($content);
}