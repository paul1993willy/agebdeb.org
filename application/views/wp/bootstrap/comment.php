<div class="comment media">
    
    <?php echo Gravatar::image($comment->user->user_email, array("class" => "pull-left img-polaroid", "width" => 92)) ?>

    <div class="media-body">

        <h5 class="media-heading">Publié par <?php echo $comment->user->display_name ?> <?php echo Date::fuzzy_span(strtotime($comment->comment_date)) ?></h5>

        <?php echo Text::auto_p($comment->comment_content) ?>

        <?php foreach ($comment->comments->find_all() as $comment): ?>

            <?php echo View::factory("wp/bootstrap/comment", array("comment" => $comment)) ?>

        <?php endforeach; ?>
    </div>

</div>
