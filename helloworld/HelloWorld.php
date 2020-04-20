<?php

namespace Demo\Hello;

class HelloWorld
{
  public $name;

  public function __construct(string $name = 'World')
  {
    $this->name = $name;
  }

  public function hello()
  {
    echo "Hello {$this->name}.";
  }
}
