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
        'salt' => 'asdq32u483248932riewhfsd78yf',
    ),
    'agebdeb\.org' => array(
        'base_url' => '/',
    )
);
?>
