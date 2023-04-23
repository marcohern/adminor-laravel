<?php

namespace App\DynConfig;

class DynConfigExporter
{
  private function exportArray(array $array): string
  {
    return "<?php\nreturn ".var_export($array, true)."\n?>";
  }

  public function export($data): string
  {
    if (is_array($data)) return $this->exportArray($data);
    else return "$data";
  }
}
