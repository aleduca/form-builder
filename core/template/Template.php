<?php

namespace core\template;

use League\Plates\Engine;

class Template implements TemplateInterface
{
  public function render(
    string $view,
    array $data = [],
    array $options = []
  ) {
    $config = require dirname(__FILE__, 3) . '/core/config/config.php';
    $path = dirname(__FILE__, 3) . DIRECTORY_SEPARATOR . $config['path'];
    $template = new Engine($path);
    $this->injectForms($config, $template);

    $data = array_merge($data, $options);

    echo $template->render($view, $data);
  }

  private function injectForms($config, $template)
  {
    if (!empty($instances = $config['forms'])) {
      foreach ($instances as $key => $instance) {
        $template->addData([$key => $instance::make()]);
      }
    }
  }
}
