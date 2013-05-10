<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Associe un champ avec une règle et des paramètres.
 * 
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Champ_Regle_Parametre extends ORM {

    protected $_belongs_to = array(
        'champ' => array(),
        'regle' => array(),
        'parametre' => array()
    );

}

?>
