<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Accueil extends Controller_Template_AgeBdeB {
    
    protected $content = "accueil";

    public function before() {

        parent::before();

        $this->content->posts = ORM::factory('post')
                ->where('post_type', '=', 'post')
                ->where('post_status', 'NOT IN', DB::expr("('draft', 'auto-draft', 'trash')"))
                ->limit(5)
                ->group_by(DB::expr('ID, post_parent'))
                ->order_by('post_date', 'DESC')
                ->cached()
                ->find_all();
    }

    public function action_index() {
        
    }

    public function action_contact() {

        if ($this->request->method() === Request::POST) {

            $contact = Model::factory("contact");

            $contact->values($this->request->post("contact"));

            if ($contact->check()) {
                // Envoi du courriel
                Mail_Sender::factory()
                        ->style(file_get_contents('asset/css/bootstrap-mail.min.css'))
                        ->send(array($contact, "info@agebdeb.org"), "Vous avez contacté l'AGEBdeB", "mail/contact", array("contact" => $contact));
                Notification::instance()->add(Notification::SUCCESS, "Votre message a été envoyé avec succès. Vous devriez reçevoir un courriel de confirmation à <strong>:courriel</strong>.", array(":courriel" => $contact->courriel));
            } else {
                Notification::instance()->add(Notification::ERROR, "Erreur lors de l'envoi de votre message.");
                Notification::instance()->errors($contact->validation());
            }
        }
    }

    public function action_login() {

        if ($this->request->method() === Request::POST) {
            $provider = OAuth_Provider::factory("google");
        }
    }

    public function action_logout() {
        Auth::instance()->logout();
    }

}

?>