<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package agebdeb.org
 * @category Controllers
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Controller_Error extends Kohana_Controller_Error {
    
    protected $content = 'error';
    
}

?>