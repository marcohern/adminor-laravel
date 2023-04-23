<?php

namespace App\Daos;

use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;

class CountryDao {
  public function list() : Collection
  {
    return Country::all();
  }

  public function find($source) : ?Country
  {
    switch(gettype($source)) {
      case "integer":
        return $this->findById($source);
      default:
        return $this->findByIso2($source);
    }
  }

  private function findById($id) : ?Country
  {
    return Country::find($id);
  }

  private function findByIso2($code) : ?Country
  {
    return Country::where('iso2',$code)->first();
  }
}