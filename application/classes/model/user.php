<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Description of user
 *
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_User extends Model_Auth_User {

    protected $_db_group = 'wordpress';
    
    protected $_primary_key = "ID";

}

?>
