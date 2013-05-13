<?php

defined('SYSPATH') or die('No direct access allowed.');

return array
    (
    'default' => array
        (
        'type' => 'mysql',
        'connection' => array(
            'hostname' => 'agebdeb.db.10906325.hostedresource.com',
            'database' => 'agebdeb',
            'username' => "agebdeb",
            'password' => Arr::get($_SERVER, 'DATABASE_PASSWORD'),
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => TRUE,
        'profiling' => FALSE,
    ),
    'localhost' => array
        (
        'type' => 'mysql',
        'connection' => array(
            'hostname' => 'localhost',
            'database' => 'agebdeb',
            'username' => "agebdeb",
            'password' => "agebdeb",
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
    ),
    'wordpress' => array
        (
        'type' => 'mysql',
        'connection' => array(
            'hostname' => 'agebdeb.db.10906325.hostedresource.com',
            'database' => 'agebdeb',
            'username' => "agebdeb",
            'password' => Arr::get($_SERVER, 'DATABASE_PASSWORD'),
            'persistent' => FALSE,
        ),
        'table_prefix' => 'wp_',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
    ),
);
?>
