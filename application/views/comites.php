<?php defined('SYSPATH') or die('No direct access allowed.'); ?>

<div class="row">
    <div class="span3">

        <?php echo View::factory("menu/comites") ?>

        <?php foreach ($comite->users->find_all() as $user): ?>

            <?php $poste = ORM::factory("user_comite", array("user_id" => $user, "comite_id" => $comite))->poste ?>

            <?php echo Bootstrap::media(Gravatar::image($user->user_email), "<h4 class='media-heading'>$poste->nom</h4><p>$user->user_nicename</p><p>$poste->description</p>") ?>

        <?php endforeach ?>


    </div>
    <div class="span9">

        <?php defined('SYSPATH') or die('No direct script access.'); ?>

        <h2><?php echo $comite->nom ?> <small><?php echo $comite->description ?></small></h2>

        <?php echo Text::auto_p($comite->description_long) ?>    

        <ul class="unstyled">
            <?php foreach ($comite->links->find_all() as $lien): ?>

                <?php echo HTML::anchor($lien->url, $lien->titre); ?>

            <?php endforeach; ?>
        </ul>

        <section class="actualite">
            <?php foreach ($comite->posts->find_all() as $post): ?>

                <?php echo View::factory('wp/post', array('post' => $post)) ?>

            <?php endforeach; ?>
        </section>


    </div>
</div>