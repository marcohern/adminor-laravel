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

    public function logo(Request $r)
    {
      $path = $r->file('logo')->storeAs('logo','logo');
      $this->headers->setLogoUrl($path);
      $this->headers->save();
    }

    public function logobw(Request $r)
    {
      $path = $r->file('logobw')->storeAs('logo','logobw');
      $this->headers->setLogoUrl($path);
      $this->headers->save();
    }
}
