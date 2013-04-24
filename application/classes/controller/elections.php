<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Contrôlleur pour la page des élections.
 * 
 * @package agebdeb.org
 * @category Controllers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Controller_Elections extends Controller_Template_AGEBdeB {
    
    protected $title = "Élections du Conseil Exécutif 2013-2014";

    public static $POSTES = array(
        "Coordonnateur Général",
        "Vie Étudiante",
        "Communications",
        "Secrétariat et Archives",
        "Appui aux Luttes Sociales",
        "Affaires Internes",
        "Affaires Administratives",
        "Affaires Pédagogiques"
    );
    public $template = "template/elections";

    public function action_index() {
        
        $this->css[] = "elections.css";
        
        $this->template->content = View::factory("elections");
    }   

}

?>
