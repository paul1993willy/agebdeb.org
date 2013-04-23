<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Contrôlleur général pour le site de l'AGEBdeB.
 * 
 * @package agebdeb.org
 * @category Controllers
 * @author Paul-Willy Jean <paul1993willy@gmail.com>
 */
abstract class Controller_Template_AGEBdeB extends Controller_Template {

    protected $title = "Association générale étudiante de Bois-de-Boulogne";
    protected $description = "Le site de l'association générale étudiante de bois de boulogne";
    protected $keywords = array();
    
    /**
     *
     * @var View
     */
    public $template = 'template/agebdeb';    

    /**
     * Contenu principal
     * @var View
     */
    protected $content;

    public function before() {

        parent::before();

        // Génère un controlleur et une action par défaut
        $default_action = $this->request->action() === "index" ? "" : "/" . $this->request->action();
        $default_view = $this->request->controller() . $default_action;
        $this->content = $this->content ? $this->content : $default_view;

        $this->content = View::factory($this->content);
    }

    public function after() {

        // Metas dans les globaux
        View::set_global('title', $this->title);
        View::set_global('description', $this->description);
        View::set_global('keywords', implode(", ", $this->keywords));

        $this->template->content = $this->content;

        parent::after();
    }

}

?>
