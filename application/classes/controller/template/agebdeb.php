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

    /**
     * Titre du document HTML.
     * 
     * @var string 
     */
    protected $title = 'AGEBdeB';

    /**
     * Description du document HTML.
     * 
     * @var string 
     */
    protected $description = "Le site de l'association générale étudiante de bois de boulogne";

    /**
     * Mots-clés
     * 
     * @var array
     */
    protected $keywords = array();

    /**
     * Mots-clés globaux.
     * @var array
     */
    private $global_keywords = array('association', 'etudiant', 'college', 'cegep', 'etudes', 'democratie');

    /**
     * Liste de fichiers CSS à minifier.
     * 
     * @var array 
     */
    protected $css = array('bootstrap.css', 'agebdeb.css');

    /**
     * Liste de fichiers Javascript à minifier.
     * 
     * @var type 
     */
    protected $js = array();

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
        $default_action = $this->request->action() === 'index' ? '' : '/' . $this->request->action();
        $default_view = $this->request->controller() . $default_action;
        $this->content = $this->content ? $this->content : $default_view;

        // Si la vue n'existe pas, on lance une 404
        if (!Kohana::find_file('views', $this->content)) {
            throw new HTTP_Exception_404();
        }

        $this->content = View::factory($this->content);
    }

    public function after() {

        // Metas dans les globaux
        View::set_global('title', $this->title);
        View::set_global('description', $this->description);
        View::set_global('keywords', implode(", ", Arr::merge($this->global_keywords, $this->keywords)));

        // Fichiers à minifier
        View::set_global('js', $this->js);
        View::set_global('css', $this->css);

        // On set le contenu
        $this->template->content = $this->content;

        parent::after();
    }

}

?>
