<?php

namespace App\DynConfig;

class HeadersConfig
{
  public function __construct(private DynConfig $config)
  {
    $this->config->load("site/headers.php");
  }

  public function getTitle(): string
  {
    return $this->config->title;
  }

  public function setTitle(string $title): void
  {
    $this->config->title = $title;
  }

  public function getSubtitle(): string
  {
    return $this->config->subtitle;
  }

  public function setSubitle(string $subtitle): void
  {
    $this->config->subtitle = $subtitle;
  }

  public function save()
  {
    $this->config->save("site/headers.php");
  }
}
