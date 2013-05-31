<?php

/**
 * 
 * @package agebdeb.org
 * @category Tests
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class AGEBdeB_Test extends Unittest_TestCase {

    public function test_accueil_contact() {

        $contact = Model::factory('contact');

        $this->assertFileExists('asset/css/bootstrap-mail.min.css');

        // Envoi du courriel
        $result = Mail_Sender::factory()
                ->style(file_get_contents('asset/css/bootstrap-mail.min.css'))
                ->send(array('info@agebdeb.org'), "Vous avez contacté l'AGEBdeB", 'mail/contact', array('contact' => $contact));

        $this->assertTrue($result);
    }

    public function test_gravatar() {
        $this->assertTag(array('tag' => 'img'), Gravatar::image('info@agebdeb.org'));
    }

}

?>
