<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h3><?php echo $contact->nom ?>, vous avez contacté l'AGEBdeB</h3>

<p>Nous vous répondront à l'adresse <strong><?php echo $contact->courriel ?>.</strong></p>

<h4>Vous nous avez envoyé ce message</h4>
<div class="well"><?php echo Text::auto_p($contact->message) ?></div>
