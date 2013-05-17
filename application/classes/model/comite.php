<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Modèle pour les comités.
 * 
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Comite extends ORM {

    protected $_has_many = array(
        'users' => array('model' => 'wp_user', 'through' => 'users_comites', 'far_key' => 'ID'),
        'links' => array('model' => 'wp_link', 'through' => 'links_comites', 'far_key' => 'link_id'),
        'postes' => array()
    );

    public function posts() {
        return ORM::factory('wp_term', array('name' => $this->nom))->posts;
    }

    /**
     * Getter/setter for the stylesheet.
     * 
     * @param string $style
     * @return string
     */
    public function style($style = NULL) {

        if ($style === NULL) {

            $path = "asset/css/comites/$this->nom_url.css";

            if (file_exists($path)) {
                return file_get_contents($path);
            }

            return '';
        }

        file_put_contents($path, (string) $style);

        return $this;
    }

}

?>
