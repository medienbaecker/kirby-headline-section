<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('medienbaecker/headline-section', [
  'sections' => [
    'headline' => require __DIR__ . '/src/headline.php'
  ]
]);
