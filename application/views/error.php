<?php defined('SYSPATH') or die('No direct access'); ?>

<div class="row">

    <div class="span3">

        <h3><?php echo __('error.whattodo') ?></h3>

        <ul>
            <li><?php echo HTML::anchor('', __('error.gohome')) ?></li>
            <li><?php echo HTML::anchor(Request::initial()->uri(), __('error.startover')) ?></li>
            <li><?php echo HTML::anchor('accueil#contact', "Contacter les développeurs")?></li>
        </ul>

    </div>

    <div class="span9">


        <h2><?php echo __($title) ?></h2>

        <p>Une erreur est survenue alors que vous tentiez d'accéder à cette page.</p>
        
        <div class="well"><?php echo __($description) ?></div>

    </div>


</div>






