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
        "users" => array("through" => "users_comites"),
        'links' => array('through' => 'links_comites'),
        'postes' => array()
    );
    
    public function posts() {
        return ORM::factory('wp_term', array('name' => $this->nom))->posts;
    }

}

?>
