<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Contrôlleur pour la gestion des pages d'erreur.
 * 
 * @package agebdeb.org
 * @category Controllers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Controller_Template_Error extends Controller_Template_AGEBdeB {
    
    public $template = 'template/agebdeb';
       
    public function before() {

        parent::before();

        $this->title = 'error.' . (int) $this->request->action() . '.title';

        if ($description = urldecode($this->request->param('description'))) {
            $this->description = $description;
        }
    }

}

?>
