<?php

namespace Tests\Unit\DynConfig;

use App\DynConfig\DynConfigExporter;
use PHPUnit\Framework\TestCase;
use stdClass;

class DynConfigExporterTest extends TestCase
{
  private $exporter;

  public function setUp(): void
  {
    parent::setUp();
    $this->exporter = new DynConfigExporter();
  }

  public function tearDown(): void
  {
    $this->exporter = null;
    parent::tearDown();
  }

  /**
   * A basic unit test example.
   */
  public function test_export(): void
  {
    //Act
    $content = $this->exporter->export(['foo' => 'bar']);

    //Verify
    $this->assertEquals("<?php\nreturn array (\n  'foo' => 'bar',\n)\n?>", $content);
  }

  public function test_export_obj(): void
  {
    $object = new \stdClass;
    $object->foo = "bar";
    //Act
    $content = $this->exporter->export($object);

    //Verify
    $this->assertEquals("<?php\nreturn array (\n  'foo' => 'bar',\n)\n?>", $content);
  }
}
