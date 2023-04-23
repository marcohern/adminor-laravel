<?php

namespace App\Daos;

use App\Models\State;
use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

class CityDao {

  public function __construct(private StateDao $stateDao)
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

  private function listByObject($source)
  {
    if (is_a($source, State::class)) {
      return State::where('state_id',$source->id)->list();
    }
    return collect();
  }

  private function listByScalar($source)
  {
    $state = $this->stateDao->find($source);
    return State::where('state_id',$state->id)->list();
  }
}