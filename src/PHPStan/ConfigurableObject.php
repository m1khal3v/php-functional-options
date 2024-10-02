<?php

namespace FunctionalOptions\PHPStan;

class ConfigurableObject
{
    private string $string = "default";
    private int $int = 1;
    private float $float = 1.2;

    /**
     * @phpstan-param ConfigurableObjectOption ...$configs
     */
    public function __construct(callable... $configs) {
        foreach ($configs as $config) {
            $config($this);
        }
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function setString(string $string): ConfigurableObject
    {
        $this->string = $string;
        return $this;
    }

    public function getInt(): int
    {
        return $this->int;
    }

    public function setInt(int $int): ConfigurableObject
    {
        $this->int = $int;
        return $this;
    }

    public function getFloat(): float
    {
        return $this->float;
    }

    public function setFloat(float $float): ConfigurableObject
    {
        $this->float = $float;
        return $this;
    }
}