<?php

namespace core\form;

class Form implements FormInterface
{
  public static function make(): self
  {
    return new self();
  }

  public function start(
    $action,
    $method = 'post',
    $attributes = []
  ) {
    $attributes = implode(' ', $attributes);
    return "<form action='{$action}' method='{$method}' $attributes>";
  }

  public function end()
  {
    return "</form>";
  }
}
