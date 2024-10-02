<?php

namespace FunctionalOptions\TypeSafe;

use FunctionalOptions\TypeSafe\ConfigurableObject;

interface OptionInterface
{
    public function __invoke(ConfigurableObject $object): void;
}