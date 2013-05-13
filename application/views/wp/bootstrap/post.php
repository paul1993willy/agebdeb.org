<div class="post">

    <h3><?php echo HTML::anchor(ORM::factory('wp_option', array('option_name' => 'siteurl'))->option_value . URL::query(array('p' => $post->ID)), $post->post_title) ?></h3>

    <h4>Publié par <?php echo $post->user->user_nicename ?> le <?php echo date("j M Y", strtotime($post->post_date)) ?></h4>

    <?php echo Text::auto_p($post->post_content) ?>

    <p>Dernière modification <strong><?php echo Date::fuzzy_span(strtotime($post->post_modified)) ?></strong>.</p>

    <?php foreach ($post->comments->find_all() as $comment): ?>

        <?php echo View::factory("wp/bootstrap/comment", array("comment" => $comment)) ?>

    <?php endforeach ?>

</div>

