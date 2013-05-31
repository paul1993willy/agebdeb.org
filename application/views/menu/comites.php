<?php
defined('SYSPATH') or die('No direct script access.');

$links = array("<li class='nav-header'>Comités</li>");

foreach (ORM::factory("comite")->order_by("nom")->find_all() as $comite) {
    $links[$comite->nom_url] = HTML::anchor("comites/$comite->nom_url", $comite->nom);
}
?>

<?php echo Bootstrap::nav_list($links, Request::current()->param("comite"), NULL, array("class" => "well")) ?>

