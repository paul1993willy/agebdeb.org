<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Règles appliquées aux champs de formulaire.
 */
class Model_Champ_Regle extends ORM {

    protected $_table_name = "champs_regles";
    protected $_has_many = array(
        'parametres' => array('through' => 'champs_regles_parametres')
    );

}

?>
