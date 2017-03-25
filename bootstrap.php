<?php

/**
 *
 */
chdir(__DIR__);

/**
 *
 */
if (is_file(__DIR__ . '/library/autoload.php') === true)
    /**
     *
     */
    include_once __DIR__ . '/library/autoload.php';

/**
 *
 */
if (class_exists('Frame\App') === false)
    /**
     *
     */
    throw new Exception(
        'Cannot load Frame library. Use composer for resolving this issue'
    );

/**
 *
 */
$app = new Frame\App(
    __DIR__ . '/config/application.php'
);

/**
 *  @var
 */
$app->package([
    'frame-solution' => 'Frame\\Solution',
], [
    __DIR__ . '/package'
]);

/**
 *
 */
$app->run();
