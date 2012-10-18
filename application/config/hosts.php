<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array (

'fedora' => array (
	'base_url' => '/agebdeb.org/',
    'index_file' => '',
    'errors' => true,
    'profile' => true,
    'caching' => false,
    'environnement' => Kohana::DEVELOPMENT,
	'database' => 'localhost',
),
'localhost' => array (
	'base_url' => '/agebdeb.org/',
    'index_file' => '',
    'errors' => true,
    'profile' => true,
    'caching' => false,
    'environnement' => Kohana::DEVELOPMENT,
	'database' => 'localhost',
),
'agebdeb.org' => array (
	'base_url' => '/',
    'index_file' => '',
    'errors' => false,
    'profile' => false,
    'caching' => true,
    'environnement' => Kohana::PRODUCTION,
	'database' => '',
));
?>
