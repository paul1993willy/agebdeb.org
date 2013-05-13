<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package agebdeb.org
 * @category Helpers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class HTML extends Kohana_HTML {

    public static function meta($name, $content, array $attributes = NULL) {

        $attributes['name'] = $name;
        $attributes['content'] = $content;

        return '<meta' . HTML::attributes($attributes) . ' />';
    }

    /**
     * Génère un favicon.
     * 
     * @param string $file
     * @param array $attributes
     * @param type $protocol
     * @param type $index
     * @return string
     */
    public static function favicon($file, array $attributes = NULL, $protocol = NULL, $index = FALSE) {

        if (strpos($file, '://') === FALSE) {
            // Add the base URL
            $file = URL::site($file, $protocol, $index);
        }

        // Set the favicon link
        $attributes['href'] = $file;

        // Set the favicon rel
        $attributes['rel'] = 'shortcut icon';

        // Set the favicon type
        $attributes['type'] = 'image/png';

        return '<link' . HTML::attributes($attributes) . ' />';
    }

}

?>
