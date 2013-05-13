<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Accueil extends Controller_Template_AgeBdeB {

    protected $title = "Accueil";
    protected $content = "accueil";

    public function action_index() {
        
    }

    public function action_contact() {

        if ($this->request->method() === Request::POST) {

            $contact = Model::factory("contact");

            $contact->values($this->request->post("contact"));

            if ($contact->check()) {
                // Envoi du courriel
                Mail_Sender::factory()->send(array($contact, "guillaumepoiriermorency@gmail.com"), "Vous avez contacté l'AGEBdeB", "mail/contact", array("contact" => $contact));
                Notification::instance()->add(Notification::SUCCESS, "Votre message a été envoyé avec succès. Vous devriez reçevoir un courriel de confirmation à :courriel.", array(":courriel" => $contact->courriel));
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