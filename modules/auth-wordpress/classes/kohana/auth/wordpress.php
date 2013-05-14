<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Authentication module for Wordpress.
 * 
 * Wordpress has a cookie-based authentication method. It stores credentials in
 * a cookie called wordpress_logged_in_$hash where $hash is a hash signature of 
 * ...
 * 
 * @package Auth
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Kohana_Auth_Wordpress extends Auth {

    /**
     * Determines if the user is connected.
     * 
     * @param type $role
     * @return type
     */
    public function logged_in($role = NULL) {

        list($username, $password) = explode('%', Cookie::get('wordpress_logged_in_d9as09d'));

        $wp_user = ORM::factory('wp_user', array('username' => $username));

        if ($role === NULL) {
            return $this->hash($wp_user->password) === $password;
        }

        // Not implemented yet.
        return FALSE;
    }

    protected function complete_login($user) {

        $wp_user = ORM::factory('wp_user', array('username' => $user));

        Cookie::set('wp_logged_in_rjwer0u893', $this->hash($wp_user));

        return TRUE;
    }

    public function get_user() {

        list($username, $password) = explode('%', Cookie::get('wordpress_logged_in_d9as09d'));

        $wp_user = ORM::factory('wp_user', array('username' => $username));

        if ($this->logged_in()) {
            return $wp_user;
        }

        return NULL;
    }

    public function logout() {

        Cookie::delete('wp_logged_in');

        return !$this->logged_in();
    }

    protected function _login($username, $password, $remember) {

        $hash = $this->hash($password);

        $wp_user = ORM::factory('wp_user', array('username' => $username, 'password' => $hash));

        if ($wp_user->loaded()) {
            $this->complete_login($username);
        }

        return FALSE;
    }

    public function check_password($password) {

        if ($this->get_user() === FALSE) {
            return FALSE;
        }

        return $this->get_user()->password === $this->password($this->get_user()->username);
    }

    public function password($username) {

        $wp_user = ORM::factory('wp_user', array('username' => $username));

        if (!$wp_user->loaded()) {
            return FALSE;
        }

        return $wp_user->password;
    }

}

?>
