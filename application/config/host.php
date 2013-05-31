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
        'salt' => 'asdq32u483248932riewhfsd78yf',
    //'database' => 'localhost'
    ),
    'agebdeb\.org' => array(
        'base_url' => '/',
        'salt' => Arr::get($_SERVER, 'COOKIE_SALT'),
    ),
    'phpunit' => array(
        'salt' => 'ajsdiu8*(&*(0-()()*',
        'environment' => Kohana::TESTING,
        'caching' => FALSE
    )
);
?>
