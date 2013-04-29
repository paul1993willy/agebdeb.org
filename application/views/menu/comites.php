<?php

defined('SYSPATH') or die('No direct script access.');

$links = array(
    "<li class='nav-header'>Comités</li>",
    "coda" => HTML::anchor("comites/coda", "Coda"),
    "caleb" => HTML::anchor("comites/caleb", "Caleb"),
    "miwaku" => HTML::anchor("comites/miwaku", "Miwaku"),
    "infomane" => HTML::anchor("comites/infomane", "Infomane")
);

echo Bootstrap::nav_list($links, Request::current()->param("comite"), array("class" => "well"))
?>