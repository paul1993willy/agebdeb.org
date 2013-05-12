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
        if (!$this->comite->has("users", Auth::instance()->get_user())) {
            throw new HTTP_Exception_401("Vous n'avez pas le droit de modifier ce comité.");
        }
    }

}

?>
