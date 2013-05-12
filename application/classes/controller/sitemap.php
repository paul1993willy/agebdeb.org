<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Description of sitemap
 *
 * @package agebdeb.org
 * @category Controllers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Controller_Sitemap extends Controller {

    /**
     *
     * @var Sitemap
     */
    protected $sitemap;

    public function before() {
        parent::before();
        $this->sitemap = new Sitemap();
    }

    public function action_index() {

        $this->sitemap->add(Sitemap::factory("URL")->set_loc("http://www.lol.com"))
                ->add(Sitemap::factory("URL")->set_loc(URL::site('accueil', Host::current('protocol'))))
                ->add(Sitemap::factory("URL")->set_loc(URL::site('comites', Host::current('protocol'))))
                ->add(Sitemap::factory("URL")->set_loc(URL::site('blog', Host::current('protocol'))))
                ->add(Sitemap::factory("URL")->set_loc(URL::site('authentification', Host::current('protocol'))));
    }

    public function after() {

        $this->response->headers("Content-type", "text/xml")
                ->body($this->sitemap);

        parent::after();
    }

}

?>
