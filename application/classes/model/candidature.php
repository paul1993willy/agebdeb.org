<?php

class Model_Candidature extends Model_Validation {

    public $prenom, $nom, $poste, $admission, $description;

    public function rules() {
        return array(
            "prenom" => array(
                array("not_empty")
            ),
            "nom" => array(
                array("not_empty")
            ),
            "poste" => array(
                array("not_empty")
            ),
            "admission" => array(
                array("not_empty")
            ),
            "description" => array(
                array("not_empty")
            ),
        );
    }

}

