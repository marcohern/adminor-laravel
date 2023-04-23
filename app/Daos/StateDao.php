<?php

namespace App\Daos;

use App\Models\State;
use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

class StateDao {

  public function __construct(private CountryDao $countryDao)
  {

  }

  public function list($source) : Collection
  {
    switch(gettype($source)) {
      case "object":
        return $this->listByObject($source);
      case "integer":
      case "double":
      case "string":
      default:
        return $this->listByScalar($source);
    }
  }

  public function find($source) : ?State
  {
    switch(gettype($source)) {
      case "integer":
      case "double":
        return $this->findById($source);
      default:
        return $this->findByIso3($source);
    }
  }

  private function listByScalar($source)
  {
    $country = $this->countryDao->find($source);
    return State::where('country_id',$country->id)->list();
  }

  private function listByObject($source)
  {
    if (is_a($source, Country::class)) {
      return State::where('country_id',$source->id)->list();
    }
    return collect();
  }

  private function findById($id) : ?State
  {
    return State::find($id);
  }

  private function findByIso3($code) : ?State
  {
    return State::where('iso3',$code)->first();
  }
}