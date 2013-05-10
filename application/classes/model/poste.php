<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Un poste est un titre accordé à un utilisateur. Les postes sont liés à des
 * rôles qui leur accordent des permissions.
 * 
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Poste extends ORM {
    
    protected $_belongs_to = array(
        'comite' => array()
    );

    protected $_has_many = array(
        'roles' => array() // Donne des permissions au poste
    );

}

?>
