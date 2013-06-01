<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?php echo View::factory("wp/$theme/comment", array("comment" => $comment)) ?>