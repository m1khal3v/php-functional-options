<?php

namespace FunctionalOptions\TypeSafe;

readonly class StringOption implements OptionInterface
{
    public function __construct(private string $value) {
    }

    public function __invoke(ConfigurableObject $object): void
    {
        $object->setString($this->value);
    }
}