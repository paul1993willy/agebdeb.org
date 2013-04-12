<div class="row-fluid">
    
    <h3>Postuler en ligne</h3>
    
    <?php echo Form::open() ?>

    <div class="control-group">
        <div class="controls controls-row">
            <?php echo Form::input("candidature[prenom]", $candidature->prenom, array("class" => "span6", "placeholder" => "Prénom")) ?>
            <?php echo Form::input("candidature[nom]", $candidature->nom, array("class" => "span6", "placeholder" => "Nom")) ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls controls-row">
            <?php echo Form::input("candidature[admission]", $candidature->prenom, array("class" => "span6", "placeholder" => "Numéro d'admission")) ?>
            <?php echo Form::select("candidature[poste]", Controller_Elections::$POSTES, $candidature->poste, array("class" => "span6", "placeholder" => "Poste d'exécutif")) ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo Form::textarea("candidature[description]", $candidature->description, array("class" => "span12", "placeholder" => "Texte de candidature")) ?>
    </div>

    <div class="control-group pull-right">
        <?php echo HTML::anchor("elections", "Annuler", array("class" => "btn")) ?>
        <button class="btn btn-primary">Envoyer ma candidature</button>
    </div>

    <?php echo Form::close() ?>
</div>
