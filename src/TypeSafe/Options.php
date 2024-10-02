<?php

namespace FunctionalOptions\TypeSafe;

function WithString(string $string): OptionInterface {
    return new StringOption($string);
}

function WithInt(int $int): OptionInterface {
    return new IntOption($int);
}

function WithFloat(float $float): OptionInterface {
    return new FloatOption($float);
}
