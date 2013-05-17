
<div class="row">


    <div class="span9">


        <h2>Modifier le comité <?php echo HTML::anchor("comites/$comite->nom_url", $comite->nom) ?></h2>



        <?php echo Form::open(NULL, array('class' => 'form-horizontal')) ?>

        <div class="control-group">
            <div class="control-label"><?php echo Form::label('nom', 'Nom') ?></div>
            <div class="controls"><?php echo Form::input('comite[nom]', $comite->nom) ?></div>
        </div>

        <div class="control-group">
            <div class="control-label"><?php echo Form::label('description', 'Description') ?></div>
            <div class="controls"><?php echo Form::input('comite[description]', $comite->nom) ?></div>
        </div>

        <div class="control-group">
            <div class="control-label"><?php echo Form::label('description_long', 'Description détaillée') ?></div>
            <div class="controls"><?php echo Form::textarea('comite[description_long]', $comite->nom) ?></div>
        </div>

        <div class="control-group">
            <div class="control-label"><?php echo Form::label('description_long', 'Style') ?></div>
            <div class="controls"><?php echo Form::textarea('comite[style]', $comite->style(), array('class' => 'span7')) ?></div>
        </div>

        <div class="control-group pull-right">
            <?php echo Bootstrap::button("Annuler", NULL, NULL, "", array('type' => 'reset')) ?>
            <?php echo Bootstrap::button("Modifier") ?>
        </div>

        <?php echo Form::close() ?>

    </div>

    <div class="span3">     

        <label for="image"><?php echo HTML::image("asset/img/comites/$comite->nom_url.svg", array("class" => "row-fluid")) ?></label>

        <?php echo Form::file('comite[image]', array('id' => 'image')) ?>



    </div>
</div>