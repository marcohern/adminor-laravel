<?php

namespace App\DynConfig;

class DynConfigLoader
{

  public function __construct(private DynConfigExporter $exporter)
  {
  }

  public function load($path)
  {
    $filepath = base_path($path);
    return include($filepath);
  }

  public function save($path, $data): void
  {
    $filepath = base_path($path);
    $content = $this->exporter->export($data);
    file_put_contents($filepath, $content);
  }
}
