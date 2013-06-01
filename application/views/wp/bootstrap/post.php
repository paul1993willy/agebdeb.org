<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="post">

    <?php $site_url = ORM::factory('wp_option', array('option_name' => 'siteurl'))->option_value ?>

    <h3><?php echo HTML::anchor($site_url . URL::query(array('p' => $post->ID)), $post->post_title) ?></h3>

    <h4>Publié par <?php echo HTML::anchor($site_url . URL::query(array('author_name' => $post->user->user_nicename)), $post->user->display_name) ?> le <?php echo date("j M Y", strtotime($post->post_date)) ?></h4>

    <?php echo Text::auto_p($post->post_content) ?>

    <p>Dernière modification <strong><?php echo Date::fuzzy_span(strtotime($post->post_modified)) ?></strong>.</p>

    <?php foreach ($post->comments->find_all() as $comment): ?>

        <?php echo View::factory("wp/bootstrap/comment", array("comment" => $comment)) ?>

    <?php endforeach ?>

</div>

