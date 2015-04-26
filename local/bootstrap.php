<?php

// ignore_user_abort(true);
// set_time_limit(0);

ini_set('display_errors', 'on');
error_reporting(E_ALL);

date_default_timezone_set('Pacific/Easter');
mb_internal_encoding('utf-8');

define('BASE_DIR', __DIR__ . '/../');

$tAutoLoader = require __DIR__ . '/../vendor/autoload.php';
$tAutoLoader->addPsr4('', __DIR__ . '/');
