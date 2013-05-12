<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Description of sitemap
 *
 * @author guillaume
 */
class Sitemap extends Kohana_Sitemap {

    /**
     * Singleton.
     * 
     * @return Sitemap
     */
    public static function instance() {
        return static::$instance ? static::$instance : static::$instance = new Sitemap();
    }

    /**
     * 
     * @return \Sitemap_Interface
     */
    public static function factory($interface, Sitemap_Interface $driver = NULL) {

        $class = "Sitemap_$interface";

        return new $class($driver);
    }

    /**
     * 
     * @return Sitemap
     */
    public function add(Sitemap_URL $object) {

        parent::add($object);

        return $this;
    }

}

?>
