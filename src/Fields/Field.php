<?php

namespace SecurityAuthorData\Fields;

abstract class Field
{
    protected $html;

    abstract public function __construct($name, $args);

    public function __toString(): string
    {
        return $this->html;
    }
}