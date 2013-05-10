<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Utilitaire pour récupérer des données sur Gravatar.
 * 
 * @link http://www.gravatar.com
 * 
 * @package agebdeb.org
 * @category Helpers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Gravatar {

    /**
     * Génère une image de profil provenant de Gravatar.
     * 
     * @see HTML::image
     * 
     * @param string $email
     * @param array $attributes
     * @param type $protocol
     * @param type $index
     * @return string
     */
    public static function image($email, array $attributes = NULL, $protocol = NULL, $index = FALSE) {

        $query = array();

        $query["s"] = min(Arr::get($attributes, "height", 128), Arr::get($attributes, "width", 128), 128);

        $hash = md5(strtolower(trim($email)));

        return HTML::image("http://www.gravatar.com/avatar/$hash" . URL::query($query), $attributes, $protocol, $index);
    }

    /**
     * Génère un profil d'un utilisateur provenant de Gravatar
     * 
     * @param string $email
     */
    public static function profile($email) {
        
    }

}

?>
