<?php

namespace core\form;

class Select implements FormInterface
{
  private array $options = [];

  public static function make(): self
  {
    return new self;
  }

  public function addOption(array $options)
  {
    $this->options[] = $options;
  }

  public function create(
    string $name,
    array $attributes = [],
  ) {
    $select = '<select name="' . $name . '" ' . implode(' ', $attributes) . '>';
    foreach ($this->options as $option) {
      $select .= sprintf(
        '<option value="%s">%s</option>',
        array_key_first($option),
        array_shift($option)
      );
    }
    $select .= "</select>";

    return $select;
  }
}
