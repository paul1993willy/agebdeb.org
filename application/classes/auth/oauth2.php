<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of oauth2
 *
 * @author guillaume
 */
class Auth_OAuth2 extends Auth {

    protected function _login($username, $password, $remember) {
        
        $provider = OAuth2_Provider::factory(Kohana::$config->load("auth.oauth2_provider"));

        $provider->
        
        OAuth2_Request::factory("", $method)

        return $this->complete_login($username);
    }

    public function check_password($password) {
        
    }

    public function password($username) {
        
    }

//put your code here
}

?>
