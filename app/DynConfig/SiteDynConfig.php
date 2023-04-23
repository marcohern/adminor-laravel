<?php

namespace App\DynConfig;

class SiteDynConfig
{
  private $site;

  private $title;
  private $subtitle;

  public function __construct($title, $subtitle)
  {
    $this->title = $title;
    $this->subtitle = $subtitle;
  }

  public function generate() {
    $this->site = [
      'title' => $this->title,
      'subtitle' => $this->subtitle
    ];
  }

  public function output() {
    return "<?php\nreturn ".var_export($this->site, true)."\n?>";
  }

  public function load() {
    $filepath = base_path("/site/site.php");
    $this->site = include($filepath);
    
  }
}
