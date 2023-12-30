<?php

$settings['update_free_access'] = TRUE;
$settings['file_private_path'] = DRUPAL_ROOT . '/private-files';
$settings['file_temp_path'] = DRUPAL_ROOT . '/tmp';



$settings['trusted_host_patterns'] = [
  '^loopmusicuk\.com$',
  '^.+\.loopmusicuk\.com$',
  '^loopmusic\.hyperluminal\.co\.uk$',
  '^.+\.loopmusic\.hyperluminal\.co\.uk$',
  '^loopmusic\.ddev\.site$',
  '^.+\.loopmusic\.ddev\.site$',
];

$settings['config_sync_directory'] = DRUPAL_ROOT . '/sync';

