<?php
defined('SYSPATH') or die('No direct script access.');

$links = array(
    "accueil" => HTML::anchor("", "Accueil"),
    "comites" => HTML::anchor("comites", "Comités"),
    "blog" => HTML::anchor("http://www.agebdeb.org/blog", "Blog"),
    "liens" => HTML::anchor('liens', 'Liens utiles'),
    "documents" => HTML::anchor('blog/documents-utiles', 'Documents utiles'),
    "archives" => HTML::anchor('archives', 'Archives'),
    "authentification" => HTML::anchor('blog/wp-login.php', 'Authentification')
);
?>

<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="nav-collapse collapse">

                <?php echo Bootstrap::nav($links, Request::current()->controller(), NULL, array('class' => 'nav-collapse')) ?>

                <?php echo Form::open('http://www.agebdeb.org/blog', array('class' => 'navbar-search pull-right', 'method' => 'get')) ?>

                <?php echo Form::input('s', NULL, array('class' => 'search-query', 'placeholder' => 'Rechercher')) ?>

                <?php echo Form::close() ?>

            </div>


        </div>
    </div>
</div>
