<?php defined('SYSPATH') or die('No direct script access.'); ?>

<!DOCTYPE html>
<html>
    <head><?php echo View::factory("layout/head") ?></head>

    <body>

        <nav><?php echo View::factory('menu/principal') ?></nav>

        <header><?php echo View::factory("layout/header") ?></header>

        <div class="container">    

            <nav class="row">
                <div class="span12"><?php echo $menu ?></div>
            </nav>

            <div class="row">
                <div class="span12"><?php echo View::factory("notifications") ?></div>
            </div>

            <?php echo $content ?>

        </div>

        <footer><?php echo View::factory("layout/footer") ?></footer>

        <?php echo View::factory("errors") ?>

    </body>
</html>