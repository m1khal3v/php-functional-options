<?php

namespace FunctionalOptions\TypeSafe;

readonly class FloatOption implements OptionInterface
{
    public function __construct(private float $value) {
    }

    public function __invoke(ConfigurableObject $object): void
    {
        $object->setFloat($this->value);
    }
}