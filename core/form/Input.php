<?php

namespace core\form;

class Input implements FormInterface
{
  public static function make(): self
  {
    return new self;
  }

  public function create(
    $type = 'text',
    $name = '',
    $attributes = [],
  ) {
    return sprintf(
      '<input type="%s" name="%s" %s>',
      $type,
      $name,
      implode(' ', $attributes)
    );
  }
}
