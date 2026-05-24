<?php

declare(strict_types=1);

use DrupalRector\Set\Drupal10SetList;
use Rector\Config\RectorConfig;

// Rector rewrites deprecated Drupal API calls in your own code so it keeps
// working across core minor releases. Run it from the project root:
//   vendor/bin/rector process --dry-run   (preview)
//   vendor/bin/rector process             (apply)
return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/web/modules/custom',
        __DIR__ . '/web/themes/custom',
    ])
    ->withSets([
        // Covers every deprecation up to Drupal 10, which is exactly what gets
        // removed in Drupal 11. Swap in a Drupal 11 set list when one ships.
        Drupal10SetList::DRUPAL_10,
    ]);
