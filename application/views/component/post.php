<h3><?php echo $post->subject ?></h3>

<p><?php echo Text::limit_chars($post->content, 100) ?></p>

<p><small>Publié le <?php echo $post->created ?></small></p>