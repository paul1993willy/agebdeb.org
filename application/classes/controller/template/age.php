<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template_Age extends Controller_Template {

    public $template = 'layout/template';
    protected $title = "Association générale étudiante de Bois-de-Boulogne";
    protected $description = "Le site de l'association générale étudiante de bois de boulogne";
    protected $keywords;

    /**
     *
     * @var View
     */
    protected $content;

    public function before() {
        parent::before();

        View::set_global('title', $this->title);
        View::set_global('description', $this->description);
        View::set_global('keywords', $this->keywords);

        $this->content = View::factory($this->request->controller());
    }

    public function after() {

        $this->template->content = $this->content;

        parent::after();
    }

}

?>
