<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Associe une règle de validation avec un champ de formulaire.
 * 
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency
 */
class Model_Champ_Regle extends ORM {

    protected $_table_name = "champs_regles";
    protected $_has_many = array(
        'parametres' => array('through' => 'champs_regles_parametres')
    );

}

?>
