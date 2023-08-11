<?php

namespace Tests\Unit\DynConfig;

use App\DynConfig\DynConfig;
use App\DynConfig\DynConfigExporter;
use App\DynConfig\DynConfigLoader;
use PHPUnit\Framework\TestCase;

class DynConfigTest extends TestCase
{
  use \Tests\CreatesApplication;
  
  private $exporter;
  private $loader;
  private $dynConfig;

  public function setUp(): void
  {
    parent::setUp();
    $this->createApplication();
    $this->exporter = new DynConfigExporter();
    $this->loader = new DynConfigLoader($this->exporter);
    $this->dynConfig = new DynConfig($this->loader);
  }

  public function tearDown(): void
  {
    $filepath = base_path("tests/Files/saved.php");
    if (file_exists($filepath)) unlink($filepath);
    $this->dynConfig = null;
    $this->loader = null;
    $this->exporter = null;
    parent::tearDown();
  }

  public function test_set_get(): void
  {
    $this->dynConfig->hello = "world";
    $this->assertEquals("world", $this->dynConfig->hello);
  }
}
