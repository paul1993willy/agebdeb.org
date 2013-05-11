<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * 
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Formulaire extends ORM {

    protected $_has_many = array(
        'champs' => array('through' => 'formulaires_champs'), // Champs du formulaire
        'postes' => array() // Postes notifiés quand le formulaire est remplis
    );

}

?>
