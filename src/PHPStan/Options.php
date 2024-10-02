<?php

namespace FunctionalOptions\PHPStan;

/**
 * @phpstan-return ConfigurableObjectOption
 */
function WithString(string $string): callable {
    return static function (ConfigurableObject $object) use ($string) {
        $object->setString($string);
    };
}

/**
 * @phpstan-return ConfigurableObjectOption
 */
function WithInt(int $int): callable {
    return static function (ConfigurableObject $object) use ($int) {
        $object->setInt($int);
    };
}

/**
 * @phpstan-return ConfigurableObjectOption
 */
function WithFloat(float $float): callable {
    return static function (ConfigurableObject $object) use ($float) {
        $object->setFloat($float);
    };
}
