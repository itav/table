<?php

namespace Itav\Component\Table;

class Td extends TableElement implements CellInterface
{
    protected $colspan;
    protected $rowspan;
    protected $content;


    public function __construct($content = null)
    {
        $this->content = $content;
        $this->template = 'td.twig';
    }

    /**
     * @return mixed
     */
    public function getColspan()
    {
        return $this->colspan;
    }

    /**
     * @param mixed $colspan
     * @return Td
     */
    public function setColspan($colspan)
    {
        $this->colspan = $colspan;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRowspan()
    {
        return $this->rowspan;
    }

    /**
     * @param mixed $rowspan
     * @return Td
     */
    public function setRowspan($rowspan)
    {
        $this->rowspan = $rowspan;
        return $this;
    }

    /**
     * @return null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param null $content
     * @return Td
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

}