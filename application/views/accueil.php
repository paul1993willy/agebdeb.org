<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="row">
    <div class="span8">

        <h1 id="a-propos">À propos</h1>

        <p>L’Association générale des étudiants de Bois-de-Boulogne (AGEBdeB) est une association étudiante défendant les droits et les intérêts des étudiantes et étudiants du collège de Bois-de-Boulogne, à Montréal. Établie depuis les années 1970, elle mène des campagnes de sensibilisation et d’information auprès de la population étudiante, organise des activités étudiantes, chapeaute des comités aux vocations artistiques, politiques, sociocommunautaires, médiatiques, de divertissement et de loisirs, défend les droits de la population étudiante auprès des instances de la direction et des différents paliers de gouvernement, et s’arrime aux mouvements sociaux étudiants à travers le Québec.</p>

        <p>L’Association Générale des Étudiants du Collège de Bois-de-Boulogne(AGEBdeB) regroupe toutes les personnes inscrites à temps plein, partiel et à la formation continue au cégep de Bois-de-Boulogne qui se situe dans la région de Montréal, au Québec.</p>

        <p>Elle regroupe un total de près de 3200 membres et n’est membre d’aucune association étudiante nationale.</p>

        <p>Elle a rejoint la CLASSE depuis le 12 mars 2012.</p>
        
        <?php foreach ($posts as $post): ?>

            <?php echo View::factory("wp/post", array("post" => $post)) ?>

        <?php endforeach; ?>

        <h3><?php echo HTML::anchor('blog', 'Lire les autres articles...') ?></h3>

    </div>
    <div class="span4">

        <?php $comite_principal = ORM::factory('comite', array('nom_url' => 'conseil-executif')) ?>

        <h3><?php echo $comite_principal->nom ?></h3>

        <p><?php echo $comite_principal->description_long ?> <?php echo HTML::anchor('comites/' . $comite_principal->nom_url, 'En savoir plus...') ?></p>

        <?php foreach ($comite_principal->postes->order_by('nom')->cached()->find_all() as $poste): ?>

            <div class="row" >

                <div class="span2" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;" >
                    <?php echo HTML::mailto($poste->courriel, $poste->nom, array('title' => $poste->nom, 'class' => 'tooltip-toggle')) ?>
                </div>   

                <div class="span2" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                    <?php echo $poste->user->loaded() ? $poste->user->display_name : "Vacant" ?>
                </div>

            </div>

        <?php endforeach; ?>     
        
        <h3 id="contact">Contacter l'Association</h3>

        <h5 id="contact-en-personne">En personne</h5>
        <p>Au local S-159, pavillion Ignace-Bourget</p>

        <h5 id="contact-par-telephone">Par téléphone</h5>
        <p>(514) 332-3000 poste 7580</p>

        <h5 id="contact-par-courriel">Par courriel</h5>
        <?php echo HTML::mailto('age@age.bdeb.qc.ca') ?>

        <h5>En ligne</h5>

        <?php echo Form::open("accueil/contact") ?>

        <div class="control-group">
            <?php echo Form::input("contact[nom]", $contact->nom, array("placeholder" => "Nom", "class" => "span4")) ?>
        </div>

        <div class="control-group">
            <?php echo Form::input("contact[courriel]", $contact->courriel, array("placeholder" => "Courriel", "class" => "span4")) ?>
        </div>

        <div class="control-group">
            <?php echo Form::textarea("contact[message]", $contact->message, array("placeholder" => "Message", "class" => "span4")) ?>
        </div>

        <div class="control-group text-right">            
            <?php echo Bootstrap::button("Envoyer", NULL, NULL, "primary") ?>
        </div>

        <?php echo Form::close() ?>

        <h3 id="authentification">Authentification</h3>

        <?php echo Form::open("blog/wp-login.php") ?>

        <div class="control-group">
            <?php echo Form::label('log', "Nom d'utilisateur") ?>
            <?php echo Form::input('log', NULL, array('id' => 'log', 'class' => 'span4', 'placeholder' => "Nom d'utilisateur")) ?>
        </div>

        <div class="control-group">
            <?php echo Form::label('pwd', "Mot de passe") ?>
            <?php echo Form::password('pwd', NULL, array('id' => 'pwd', 'class' => 'span4', 'placeholder' => "Mot de passe")) ?>
        </div>

        <div class="control-group">
            <?php $checkbox = Form::checkbox('rememberme', 'forever', FALSE, array('id' => 'rememberme')) ?>
            <?php echo Form::label('rememberme', "$checkbox Se souvenir de moi", array('class' => 'checkbox')) ?>
        </div>

        <div class="control-group text-right">
            <?php echo Bootstrap::button("Connexion", NULL, NULL, "success") ?>
        </div>

        <?php echo Form::close() ?>
    </div>
</div>
