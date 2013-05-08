
<?php echo Form::open() ?>

<div class="row">
    <div class="well span6 offset3">
        <div class="text-center">
            <h2>Se connecter avec Google</h2>

            <div class="control-group">
                <?php echo Bootstrap::button("Connexion", "oauth", "google", "primary", array("class" => "btn-large")) ?>
            </div>
        </div>

        <p>La technologie OAuth2 pour vous connecter sans mot de passe. <?php echo HTML::anchor("", "En savoir plus") ?>...</p>

    </div>
</div>
<?php echo Form::close() ?>