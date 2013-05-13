<footer class="container">

    <div class="row">

        <div class="span4">

            <h4>Navigation</h4>

            <ul class="unstyled">
                <li><?php echo HTML::anchor("", "Accueil") ?></li>
                <li><?php echo HTML::anchor("comites", "Comités") ?></li>
                <li><?php echo HTML::anchor("http://agebdeb.wordpress.com", "Blog") ?></li>
                <li><?php echo HTML::anchor("https://www.facebook.com/agebdeb", "Page facebook") ?></li>
            </ul>

        </div>
        <div class="span4">

            <h4>Liens externes</h4>

            <ul class="unstyled">
                <li><?php echo HTML::anchor("http://www.asse-solidarite.qc.ca/", "ASSÉ") ?></li>
                <li><?php echo HTML::anchor("http://www.bloquonslahausse.com/", "CLASSE") ?></li>
            </ul>

        </div>




        <div class="span4">          

            <h4>Crédits</h4>
            <p>Ce site est le résultat travail acharné de <?php echo HTML::anchor("https://www.github.com/Arteymix", "Guillaume Poirier-Morency") ?> et <?php echo HTML::anchor("https://www.github.com/paul1993willy", "Paul-Willy Jean") ?>.</p>

            <p>Le contenu du site de l'AGEBdeB est disponible en partie sous <?php echo HTML::anchor("http://creativecommons.org/licenses/by-nc/3.0/deed.fr_CA", "Creative Commons 3.0 - Paternité - Pas d'Utilisation Commerciale 3.0 Unported") ?>.</p>

            <?php echo View::factory("layout/license") ?>

        </div>
    </div>


</footer>