<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package agebdeb.org
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class HTML extends Kohana_HTML {

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
