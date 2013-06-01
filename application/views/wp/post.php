<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?php echo View::factory("wp/$theme/post", array("post" => $post)) ?>