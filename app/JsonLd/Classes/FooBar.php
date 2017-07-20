<?php

namespace JsonLd\Classes\FooBar;

use JsonLd\ContextTypes\AbstractContext;

class FooBar extends AbstractContext
{
    protected $structure = [
        'name' => null,
        'description' => null,
        'image' => null,
        'url' => null,
    ];
}