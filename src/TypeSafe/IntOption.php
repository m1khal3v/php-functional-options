<?php

namespace FunctionalOptions\TypeSafe;

readonly class IntOption implements OptionInterface
{
    public function __construct(private int $value) {
    }

    public function __invoke(ConfigurableObject $object): void
    {
        $object->setInt($this->value);
    }
}