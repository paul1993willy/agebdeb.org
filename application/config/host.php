<?php

return array(
    'default' => array(
        'base_url' => '/agebdeb.org/',
        'index_file' => '',
        'errors' => TRUE,
        'profile' => FALSE,
        'caching' => TRUE,
        'environment' => Kohana::PRODUCTION,
    ),
    'localhost' => array(
        'caching' => FALSE,
        'environment' => Kohana::DEVELOPMENT,
    ),
    'agebdeb\.org' => array(
        'base_url' => '/',
    )
);
?>
