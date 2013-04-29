<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Contrôlleur pour présenter les comités.
 * 
 * @package agebdeb.org
 * @category Controllers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Controller_Comites extends Controller_Template_AGEBdeB {
    
    public function action_index() {
        $this->content->comite = $this->request->param("comite");
    }

}

?>
