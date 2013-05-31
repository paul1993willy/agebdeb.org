
<div class="row">

    <?php echo Form::open(NULL, array('class' => 'form-horizontal')) ?>


    <div class="span3">     

        <div class="control-group">

            <label for="image">
                <?php echo HTML::image("asset/img/comites/$comite->nom_url.svg", array('class' => 'img-polaroid')) ?>
            </label>

            <?php echo Form::file('comite[image]', array('id' => 'image')) ?>

        </div>

    </div>


    <div class="span9">

        <div class="control-group pull-right">
            
        </div>

        <h2><?php echo HTML::anchor("comites/$comite->nom_url", $comite->nom) ?> <small><?php echo $comite->description ?></small></h2>


        <div class="control-group">
            <div class="control-label"><?php echo Form::label('nom', 'Nom') ?></div>
            <div class="controls"><?php echo Form::input('comite[nom]', $comite->nom, array('id' => 'nom', 'class' => 'span7')) ?></div>
        </div>

        <div class="control-group">
            <div class="control-label"><?php echo Form::label('description', 'Description') ?></div>
            <div class="controls"><?php echo Form::input('comite[description]', $comite->description, array('id' => 'description', 'class' => 'span7')) ?></div>
        </div>

        <div class="control-group">
            <div class="control-label"><?php echo Form::label('description_long', 'Description détaillée') ?></div>
            <div class="controls"><?php echo Form::textarea('comite[description_long]', $comite->description_long, array('id' => 'description_long', 'class' => 'span7')) ?></div>
        </div>

        <div class="control-group">
            <div class="control-label"><?php echo Form::label('style', 'Style') ?></div>
            <div class="controls">

                <?php echo Form::textarea('comite[style]', $comite->style(), array('id' => 'style', 'class' => 'span7 prettyprint lang-css')) ?>


            </div>

        </div>

        <div class="control-group">

            <div class="control-label"><?php echo Form::label('style', 'Aperçu') ?></div>

            <div class="controls">
                <pre id="style-preview" class="prettyprint lang-css"></pre>
            </div>

        </div>

        <div class="control-group pull-right">
            <?php echo Bootstrap::button("Annuler", NULL, NULL, '', array('type' => 'reset')) ?>
            <?php echo Bootstrap::button("Modifier", NULL, NULL, 'primary') ?>
        </div>

    </div>

    <?php echo Form::close() ?>


</div>


<script type="text/javascript">
    $('#style').keyup(function() {
        $('#style-preview').text($(this).val());
    });
</script>