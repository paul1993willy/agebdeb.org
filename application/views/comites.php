<?php defined('SYSPATH') or die('No direct access allowed.'); ?>

<div class="row">

    <div class="span3">

        <p><?php echo HTML::image("asset/img/comites/$comite->nom_url.svg", array("class" => "row-fluid")) ?></p>

        <?php echo View::factory("menu/comites") ?>

        <ul class="unstyled">
            <?php foreach ($comite->postes->order_by('nom')->cached()->find_all() as $poste): ?>
                <li>
                    <h4><?php echo $poste->nom ?></h4>

                    <h5><?php echo $poste->user->loaded() ? $poste->user->display_name : 'Vacant' ?></h5>

                    <p><?php echo $poste->description ?></p>
                </li>
            <?php endforeach ?>
        </ul>

    </div>
    <div class="span9">   

        <h2 class="media-heading"><?php echo $comite->nom ?> <small><?php echo $comite->description ?></small></h2>

        <?php echo Text::auto_p($comite->description_long) ?>    

        <ul class="unstyled">
            <?php foreach ($comite->links->find_all() as $lien): ?>

                <?php echo HTML::anchor($lien->url, $lien->titre); ?>

            <?php endforeach; ?>
        </ul>

        <section class="actualite">

            <?php foreach ($posts as $post): ?>

                <?php echo View::factory('wp/post', array('post' => $post)) ?>

            <?php endforeach; ?>

        </section>

    </div>
</div>