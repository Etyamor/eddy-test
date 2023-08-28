<?php

declare(strict_types=1);

namespace SecurityAuthorData;

use SecurityAuthorData\Widgets\AuthorData;

class Startup
{
    public function __construct()
    {
        new AuthorData();
        //Here we can initialize more widgets from Widgets folder
    }
}