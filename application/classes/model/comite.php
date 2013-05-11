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
        'posts' => array('through' => 'terms', 'model' => 'wp_term')
    );

}

?>
