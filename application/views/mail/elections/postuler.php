<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h2>Demande de candidature de <?php echo $candidature->nom_complet() ?> pour le poste de <?php echo $candidature->poste ?></h2>

<p>Numéro d'admission: <?php echo $candidature->admission ?></p>

<pre><?php echo $candidature->description ?></pre>