<?php

namespace Wcs\Model;

class Item
{
    private $id;
    private $title;

    public function getId(): int
    {
      return $this->id;
    }

    public function getTitle(): string
    {
      return $this->title;
    }

    public function setTitle($title):Item
    {
      $this->title = $title;
      return $this;
    }
}