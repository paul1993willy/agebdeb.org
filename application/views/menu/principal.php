<?php
defined('SYSPATH') or die('No direct script access.');

$links = array(
    "accueil" => HTML::anchor("", "Accueil"),
    "comites" => HTML::anchor("comites", "Comités"),
    "blog" => HTML::anchor("http://www.agebdeb.org/blog", "Blog"),
    "liens" => HTML::anchor('liens', 'Liens utiles')
);
?>

<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <?php echo Bootstrap::navs($links, Request::current()->controller()) ?>
        </div>
    </div>
</div>
