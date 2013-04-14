<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Accueil extends Controller_Template_AgeBdeB {

    public function before() {
        parent::before();
    }

    public function action_index() {
        $this->title = 'Accueil';
        $this->body = View::factory('accueil');
    }

}

?>