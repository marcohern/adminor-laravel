<?php

namespace Tests\Unit\DynConfig;

use App\DynConfig\DynConfigExporter;
use App\DynConfig\DynConfigLoader;
use PHPUnit\Framework\TestCase;

class DynConfigLoaderTest extends TestCase
{
  use \Tests\CreatesApplication;
  
  private $exporter;
  private $loader;

  public function setUp(): void
  {
    parent::setUp();
    $this->createApplication();
    $this->exporter = new DynConfigExporter();
    $this->loader = new DynConfigLoader($this->exporter);
  }

  public function tearDown(): void
  {
    $filepath = base_path("tests/Files/saved.php");
    if (file_exists($filepath)) unlink($filepath);
    $this->loader = null;
    $this->exporter = null;
    parent::tearDown();
  }

  /**
   * A basic unit test example.
   */
  public function test_load(): void
  {
    $array = $this->loader->load("tests/Files/settings.php");
    $this->assertEquals(['foo' => 'bar'], $array);
  }

  /**
   * A basic unit test example.
   */
  public function test_save(): void
  {
    //Setup
    $array = $this->loader->load("tests/Files/settings.php");

    //Act
    $this->loader->save("tests/Files/saved.php", $array);

    //Verify
    $filepath = base_path("tests/Files/saved.php");
    $this->assertTrue(file_exists($filepath));
  }

  public function test_save_updates(): void
  {
    //Setup
    $array = $this->loader->load("tests/Files/settings.php");

    //Act
    $array['foo'] = 'bar2';
    $this->loader->save("tests/Files/saved.php", $array);

    //Verify
    $array = $this->loader->load("tests/Files/saved.php");
    $this->assertEquals('bar2', $array['foo']);
  }
}
