<!DOCTYPE html>
<html>
    <head><?php echo View::factory("layout/head") ?></head>

    <body>
        <header><?php echo View::factory("layout/header") ?></header>

        <div class="container">        

            <?php echo $content ?>

        </div>

        <footer><?php echo View::factory("layout/footer") ?></footer>

    </body>
</html>