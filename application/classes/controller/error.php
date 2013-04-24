<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package agebdeb.org
 * @category Controllers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Controller_Error extends Kohana_Controller_Error {

    public $template = "template/agebdeb";
    protected $css = array("bootstrap.css", "agebdeb.css");
    protected $js = array();

    public function after() {
        // Fichiers à minifier
        View::set_global("js", $this->js);
        View::set_global("css", $this->css);
        parent::after();
    }

}

?>