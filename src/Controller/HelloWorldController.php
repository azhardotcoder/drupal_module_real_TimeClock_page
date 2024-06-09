<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {
  public function hello() {
    return [
      '#markup' => $this->t('Hello, World! The current Asia/kolkata time is <i><h2 id="clock"></h2></i>.'),
      '#attached' => [
        'library' => [
          'hello_world/clock'
        ]
      ],
    ];
  }
}
