<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h2><?php echo $contact->nom ?>, vous avez contacté l'AGEBdeB</h2>

<p>Nous vous répondront à l'adresse <strong><?php echo $contact->courriel ?></strong></p>

<?php echo Text::auto_p($contact->message) ?>
