<?php

namespace tests\TypeSafe;

use FunctionalOptions\TypeSafe\ConfigurableObject;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use function FunctionalOptions\TypeSafe\WithFloat;
use function FunctionalOptions\TypeSafe\WithInt;
use function FunctionalOptions\TypeSafe\WithString;

class ConfigurableObjectTest extends TestCase
{
    public function testWithoutOptions(): void
    {
        $object = new ConfigurableObject();
        self::assertEquals("default", $object->getString());
        self::assertEquals(1, $object->getInt());
        self::assertEquals(1.2, $object->getFloat());
    }

    public static function optionsDataProvider(): array {
        return [
            [
                [
                    WithString("something")
                ],
                [
                    'string' => 'something',
                    'int' => 1,
                    'float' => 1.2,
                ],
            ],
            [
                [
                    WithInt(2)
                ],
                [
                    'string' => 'default',
                    'int' => 2,
                    'float' => 1.2,
                ],
            ],
            [
                [
                    WithFloat(2.3)
                ],
                [
                    'string' => 'default',
                    'int' => 1,
                    'float' => 2.3,
                ],
            ],
            [
                [
                    WithString("something"),
                    WithInt(2),
                    WithFloat(2.3),
                ],
                [
                    'string' => 'something',
                    'int' => 2,
                    'float' => 2.3,
                ],
            ]
        ];
    }

    #[DataProvider('optionsDataProvider')]
    public function testWithOptions(array $options, array $expected): void {
        $object = new ConfigurableObject(...$options);
        self::assertEquals($expected['string'], $object->getString());
        self::assertEquals($expected['int'], $object->getInt());
        self::assertEquals($expected['float'], $object->getFloat());
    }
}
