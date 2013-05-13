<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Comite extends ORM {

    protected $_has_many = array(
        "users" => array("through" => "users_comites"),
        "liens" => array("through" => "comites_liens")
    );

}

?>
