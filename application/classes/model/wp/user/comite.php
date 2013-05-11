<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Lie un utilisateur avec un comité en lui donnant un poste.
 *
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 * @category Models
 */
class Model_WP_User_Comite extends Model_WP {
    
    protected $_table_name = 'users_comites';

    protected $_belongs_to = array(
        'user' => array(), // Utilisateur
        'comite' => array(), // Comité
        'poste' => array() // Poste de l'utilisateur dans le comité
    );

    public function rules() {
        return array(
            'user_id' => array(
                array('not_empty')
            ),
        );
    }
    
}

?>
