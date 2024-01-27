<?php

namespace core\form;

class Button implements FormInterface
{
  public static function make(): self
  {
    return new self();
  }

  public function create(
    $type = 'button',
    $label = '',
    $attributes = [],
  ) {
    return sprintf(
      '<button type="%s" %s>%s</button>',
      $type,
      implode(' ', $attributes),
      $label
    );
  }
}
