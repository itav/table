<?php

namespace Itav\Component\Table;

interface TableElementInterface
{
    public function getId();


    public function getClass();


    public function getAttributes();


    public function getTemplate();


    public function setId($id);


    public function setClass($class);


    public function addClass($class);


    public function removeClass($class);


    public function setAttributes($attributes);


    public function setTemplate($template);

}