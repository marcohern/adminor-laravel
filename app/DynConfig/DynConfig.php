<?php

namespace App\DynConfig;

class DynConfig
{
  private $settings;

  public function __construct(private DynConfigLoader $loader)
  {
    $this->settings = new \stdClass;
  }

  public function __set(string $name, mixed $value): void
  {
    $this->settings->$name = $value;
  }

  public function __get(string $name): mixed
  {
    return $this->settings->$name;
  }
}
