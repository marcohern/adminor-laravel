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

  public function test_load(): void
  {
    $this->dynConfig->load("tests/Files/settings.php");
    $this->assertEquals("bar", $this->dynConfig->foo);
  }

  public function test_set_siteheaders(): void
  {
    $this->dynConfig->title = "The Title";
    $this->dynConfig->subtitle = "The Subtitle";
    $this->dynConfig->logoUrl = "https://www.images.com/logo.jpg";
    $this->dynConfig->logoBwUrl = "https://www.images.com/logo-bw.jpg";

    $this->assertEquals("The Title", $this->dynConfig->title);
    $this->assertEquals("The Subtitle", $this->dynConfig->subtitle);
    $this->assertEquals("https://www.images.com/logo.jpg", $this->dynConfig->logoUrl);
    $this->assertEquals("https://www.images.com/logo-bw.jpg", $this->dynConfig->logoBwUrl);
  }
}
