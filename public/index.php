<?php

ini_set('default_charset',          'UTF-8');
ini_set('display_errors',           1);
ini_set('display_startup_errors',   1);

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

/**
 *  Execution bootstrap scenario
 */
include __DIR__ . '/../bootstrap.php';
