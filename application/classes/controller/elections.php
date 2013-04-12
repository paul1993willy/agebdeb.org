<?php

class Controller_Elections extends Controller_Template {

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
        $this->template->content = View::factory("elections");
    }

    public function action_postuler() {

        $candidature = Model::factory("candidature");

        $this->template->content = View::factory("elections/postuler", array("candidature" => $candidature));

        if ($this->request->method() !== Request::POST) {
            return;
        }

        $candidature->values($this->request->post("candidature"), array("nom", "prenom", "poste", "description", "admission"));

        if ($candidature->check()) {
            Mail_Sender::factory()->send($candidature, "mail/elections/postuler", array("candidature" => $candidature));
        }
    }

}

?>
