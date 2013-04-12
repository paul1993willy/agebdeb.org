<?php

class Controller_Post extends Controller_Template_Age {

    /**
     *
     * @var Model_Post
     */
    private $post;

    public function before() {
        parent::before();

        $this->post = ORM::factory("post", $this->request->param("id"));
    }

    public function after() {
        $this->content->post = $this->post;
        parent::after();
    }

    public function action_afficher() {
        
    }

}

?>
