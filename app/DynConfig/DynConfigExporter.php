<?php

namespace App\DynConfig;

use stdClass;

class DynConfigExporter
{
  private function exportArray(array $array): string
  {
    return "<?php\nreturn ".var_export($array, true)."\n?>";
  }

  public function export(mixed $data): string
  {
    if (is_array($data))               return $this->exportArray($data);
    if (is_a($data, \stdClass::class)) return $this->exportArray((array) $data);
    else return "$data";
  }
}
