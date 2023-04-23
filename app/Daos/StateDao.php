<?php

namespace App\Daos;

use App\Models\State;
use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;

class StateDao {

  public function __construct(private CountryDao $countryDao)
  {

  }

  private function listByCountryCode($code) : Collection
  {
    $country = $this->countryDao->find($code);
    return State::where('country_id',$country->id)->list();
  }

  public function find($source) : ?State
  {
    switch(gettype($source)) {
      case "integer":
        return $this->findById($source);
      default:
        return $this->findByIso3($source);
    }
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