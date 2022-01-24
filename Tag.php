<?php
class Tag
{
  private $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function open()
  {
    $tag = $this->name;
    return "<{$tag}>";
  }
  public function close()
  {
    $tag = $this->name;
    return "</{$tag}>";
  }
}
