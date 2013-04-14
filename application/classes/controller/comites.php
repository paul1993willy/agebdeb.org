<?php

/**
 * Contrôlleur pour présenter les comités.
 * 
 * @package agebdeb.org
 * @category Controllers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Controller_Comites extends Controller_Template_AGEBdeB {

    public function action_index() {

        if (($comite = $this->request->param("comite"))) {
            $this->content = View::factory("comites/$comite");
        }
    }

}

?>
