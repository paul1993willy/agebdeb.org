<?php

defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------
// Load the core Kohana class
require SYSPATH . 'classes/kohana/core' . EXT;

if (is_file(APPPATH . 'classes/kohana' . EXT)) {
    // Application extends the core
    require APPPATH . 'classes/kohana' . EXT;
} else {
    // Load empty core extension
    require SYSPATH . 'classes/kohana' . EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Montreal');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'fr_CA.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('fr');

Host::init();

View::set_global("theme", "bootstrap");

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    // 'auth'       => MODPATH.'auth',       // Basic authentication
    // 'cache'      => MODPATH.'cache',      // Caching with multiple backends
    // 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
    'database' => MODPATH . 'database', // Database access
    // 'image'      => MODPATH.'image',      // Image manipulation
    'orm' => MODPATH . 'orm', // Object Relationship Mapping
    // 'unittest'   => MODPATH.'unittest',   // Unit testing
    // 'userguide' => MODPATH . 'userguide', // User guide and API documentation
    'bootstrap' => MODPATH . 'bootstrap', // Bootstrap helper
    'notifications' => MODPATH . 'notification', // Notification system
    'mail' => MODPATH . 'mail',
    'error' => MODPATH . 'error',
    'minify' => MODPATH . 'minify',
    'urlang' => MODPATH . 'urlang',
    'orm-wordpress' => MODPATH . 'orm-wordpress',
));

Route::set("comites", "comites(/<comite>)")
        ->defaults(array(
            "controller" => "comites",
            "comite" => "coda"
        ));

Route::set('default', '(<controller>(/<action>))', array(
))->defaults(array(
    'controller' => 'accueil',
    'action' => 'index',
));

Route::set("document", "document")->defaults(array(
    "controller" => "document",
    "action" => "index"
));

Route::set("formulaire", "formulaire(/<formulaire>)")->defaults(array(
    "controller" => "formulaire",
    "action" => "index"
));
?>
