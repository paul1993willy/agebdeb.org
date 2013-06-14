<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    'default' => array(
        'base_url' => '/agebdeb.org/',
        'index_file' => '',
        'errors' => TRUE,
        'profile' => FALSE,
        'caching' => TRUE,
        'environment' => Kohana::PRODUCTION,
        'database' => 'default',
        'protocol' => 'http'
    ),
    'localhost' => array(
        'environment' => Kohana::PRODUCTION,
        'cookie_salt' => 'asdq32u483248932riewhfsd78yf',
    ),
    'agebdeb\.org' => array(
        'base_url' => '/',
        'cookie_salt' => Arr::get($_SERVER, 'COOKIE_SALT'),
    ),
    'phpunit' => array(
        'salt' => 'ajsdiu8*(&*(0-()()*',
        'environment' => Kohana::TESTING,
        'caching' => FALSE
    )
);
?>
