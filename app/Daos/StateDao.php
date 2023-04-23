<?php

namespace App\Daos;

use App\Models\State;
use Illuminate\Database\Eloquent\Collection;

class StateDao {
  public function list($countryId) : Collection
  {
    return State::where('country_id',$countryId)->list();
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