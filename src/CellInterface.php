<?php

namespace Itav\Component\Table;


/**
 * Interface for elements like: Th, Td
 *
 * Interface CellInterface
 * @package Itav\Component\Table
 */
interface CellInterface
{
    public function getColspan();

    public function getRowspan();

    public function setColspan($colspan);

    public function setRowspan($rowspan);

    public function getContent();

    public function setContent($content);
}