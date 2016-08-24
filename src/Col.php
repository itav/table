<?php

namespace Itav\Component\Table;

class Col extends TableElement
{
    private $span;

    public function __construct()
    {
        $this->template = 'col.twig';
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
     * @return Col
     */
    public function setSpan($span)
    {
        $this->span = $span;
        return $this;
    }

}