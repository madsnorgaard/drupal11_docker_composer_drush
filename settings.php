<?php

$databases = [];
$databases['default']['default'] = array(
  'database' => getenv('DB_NAME'),
  'username' => getenv('DB_USER'),
  'password' => getenv('DB_PASS'),
  'prefix' => '',
  'host' => getenv('DB_HOST'),
  'port' => getenv('DB_PORT') ?: '3306',
  'namespace' => 'Drupal\mysql\Driver\Database\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);

$settings['hash_salt'] = getenv('HASH_SALT');
$settings['update_free_access'] = false;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['trusted_host_patterns'][] = getenv('TRUSTED_HOST_PATTERNS');

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 100;
$settings['entity_update_backup'] = true;
$settings['migrate_node_migrate_type_classic'] = false;

# Config Split (requires drupal/config_split). Only applied when the env var is set.
if (getenv('CONFIG_SPLIT_DEVELOPMENT') !== false) {
    $config['config_split.config_split.develop']['status'] = strtolower(getenv('CONFIG_SPLIT_DEVELOPMENT')) === 'true';
}

if (extension_loaded('redis')) {
    $settings['redis.connection']['interface'] = 'PhpRedis';
    $settings['redis.connection']['host'] = getenv('REDIS_HOST');
    $settings['redis.connection']['port'] = getenv('REDIS_PORT') ?: '6379';
    $settings['cache']['default'] = 'cache.backend.redis';
    $settings['cache_prefix'] = 'drupal11_redis_';
}

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
    include $app_root . '/' . $site_path . '/settings.local.php';
}

# force ssl on all pages
$settings['reverse_proxy'] = true;
$settings['reverse_proxy_addresses'] = array(@$_SERVER['REMOTE_ADDR']);

# Email configuration (requires drupal/smtp). Only applied when SMTP_HOST is set.
if (getenv('SMTP_HOST')) {
    $config['smtp.settings']['smtp_host'] = getenv('SMTP_HOST');
    $config['smtp.settings']['smtp_port'] = getenv('SMTP_PORT') ?: 587;
    $config['smtp.settings']['smtp_username'] = getenv('SMTP_USER') ?: '';
    $config['smtp.settings']['smtp_password'] = getenv('SMTP_PASSWORD') ?: '';
    $config['smtp.settings']['smtp_protocol'] = getenv('SMTP_PROTOCOL') ?: 'tls';
    $config['smtp.settings']['smtp_autotls'] = false;
}

# Solr configuration override (requires drupal/search_api_solr). Only applied when SOLR_HOST is set.
if (getenv('SOLR_HOST')) {
    $config['search_api.server.solr']['backend_config']['connector_config']['host'] = getenv('SOLR_HOST');
    $config['search_api.server.solr']['backend_config']['connector_config']['port'] = getenv('SOLR_PORT') ?: 8983;
    $config['search_api.server.solr']['backend_config']['connector_config']['core'] = getenv('SOLR_CORE') ?: 'dev';
}

# Private file path
# $settings['file_private_path'] = '/opt/drupal/private';

# Config sync directory
$settings['config_sync_directory'] = '../config/sync';
