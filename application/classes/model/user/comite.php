<?php

/**
 * Description of comite
 *
 * @author guillaume
 */
class Model_User_Comite extends ORM {

    protected $_db_group = 'wordpress';
    
    protected $_table_name = 'users_comites';
    
    protected $_belongs_to = array(
        'user' => array(),
        'comite' => array(),
        'poste' => array()
    );

    //put your code here
}

?>
