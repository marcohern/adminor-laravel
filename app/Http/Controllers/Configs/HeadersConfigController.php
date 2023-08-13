<?php

namespace App\Http\Controllers\Configs;

use App\DynConfig\HeadersConfig;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadersConfigController extends Controller
{
    public function __construct(private HeadersConfig $headers)
    {
    }

    public function index()
    {
      return $this->headers->get();
    }

    public function create(Request $r)
    {
      $input = $r->collect();
      $this->headers->setTitle($input['title']);
      $this->headers->setSubtitle($input['subtitle']);
      $this->headers->save();
    }
}
