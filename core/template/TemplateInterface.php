<?php

namespace core\template;

interface TemplateInterface
{
    public function render(
        string $template,
        array $data = [],
        array $options = []
    );
}
