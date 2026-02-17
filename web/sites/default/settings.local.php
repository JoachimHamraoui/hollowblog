<?php

/**
 * @file
 * Local development overrides.
 *
 * This file is loaded by settings.php when present.
 */

// Enable local development services (provides cache.backend.null, etc.).
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

// Disable render and page caches for local development.
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['twig'] = 'cache.backend.null';

// Disable CSS/JS aggregation for easier theming and debugging.
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Allow rebuilding the container when services.yml changes.
$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;
