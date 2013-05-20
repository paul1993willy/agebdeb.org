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

    protected $keywords = array('comites', 'engagement');

    /**
     *
     * @var Model_Comite
     */
    protected $comite;

    public function before() {
        parent::before();
        $this->comite = ORM::factory("comite", array("nom_url" => $this->request->param("comite")));
    }

    public function after() {
        $this->content->comite = $this->comite;
        parent::after();
    }

    public function action_index() {
        
        // Ajout de la feuille de style du comité
        $this->css[] = "asset/css/comites/{$this->comite->nom_url}.css";

        $this->content->posts = $this->comite->posts()
                ->where('post_type', '=', 'post')
                ->where('post_status', 'NOT IN', DB::expr("('draft', 'auto-draft', 'trash')"))
                ->limit(5)
                ->group_by(DB::expr('ID, post_parent'))
                ->order_by('post_date', 'DESC')
                ->cached()
                ->find_all();
    }

    public function action_modifier() {        
        
        // Google prettify
        $this->css[] = 'prettify.css';
        $this->js[] = 'prettify/run_prettify.js';
        $this->js[] = 'prettify/lang-css.js';

        if ($this->request->method() !== Request::POST) {
            return;
        }

        $values = $this->request->post('comite');

        $comite_expected = array();

        try {

            $this->comite
                    ->values($this->request->post('comite'), $comite_expected)
                    ->update();

            // Update de la feuille de style
            $this->comite->style($values['style']);

            Notification::instance()->add(Notification::SUCCESS, 'Vous changements ont été effectué avec succès!');
        } catch (ORM_Validation_Exception $ove) {
            Notification::instance()->errors($ove);
        }
    }

}

?>
