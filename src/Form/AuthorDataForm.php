<?php

namespace SecurityAuthorData\Form;

use SecurityAuthorData\Fields\FieldFactory;

class AuthorDataForm extends Form
{
    protected function getForm(): string
    {
        FieldFactory::createField('author_name', [
            'form' => $this,
            'label' => 'Author Name'
        ], 'input');

        FieldFactory::createField('message', [
            'form' => $this,
            'label' => 'Message'
        ], 'textarea');

        return FieldFactory::getHtml();
    }
}