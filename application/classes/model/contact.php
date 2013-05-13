<?php

/**
 * Description of contact
 *
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Contact extends Model_Validation implements Mail_Receiver {

    public $nom, $courriel, $message;

    public function receiver_name() {
        return $this->nom;
    }

    public function receiver_email() {
        return $this->courriel;
    }

    public function receiver_subscribed($view) {
        return $view === "mail/contact";
    }

    public function rules() {
        return array(
            "nom" => array(
                array("not_empty")
            ),
            "courriel" => array(
                array("not_empty"),
                array("email")
            ),
            "message" => array(
                array("not_empty")
            )
        );
    }

}

?>
