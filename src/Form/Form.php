<?php

namespace SecurityAuthorData\Form;

abstract class Form
{
    public $widget;
    public $instance;

    public function __construct($widget, $instance = []) {
        $this->widget = $widget;
        $this->instance = $instance;
    }

    public function __toString(): string
    {
        return $this->getForm();
    }

    abstract protected function getForm(): string;
}