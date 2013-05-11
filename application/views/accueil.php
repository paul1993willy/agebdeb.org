<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="row">
    <div class="span8">

        <h1>À propos</h1>

        <p>L’Association générale des étudiants de Bois-de-Boulogne (AGEBdeB) est une association étudiante défendant les droits et les intérêts des étudiantes et étudiants du collège de Bois-de-Boulogne, à Montréal. Établie depuis les années 1970, elle mène des campagnes de sensibilisation et d’information auprès de la population étudiante, organise des activités étudiantes, chapeaute des comités aux vocations artistiques, politiques, sociocommunautaires, médiatiques, de divertissement et de loisirs, défend les droits de la population étudiante auprès des instances de la direction et des différents paliers de gouvernement, et s’arrime aux mouvements sociaux étudiants à travers le Québec.</p>

        <p>L’Association Générale des Étudiants du Collège de Bois-de-Boulogne(AGEBdeB) regroupe toutes les personnes inscrites à temps plein, partiel et à la formation continue au cégep de Bois-de-Boulogne qui se situe dans la région de Montréal, au Québec.</p>

        <p>Elle regroupe un total de près de 3200 membres et n’est membre d’aucune association étudiante nationale.</p>

        <p>Elle a rejoint la CLASSE depuis le 12 mars 2012.</p>

        <?php foreach (ORM::factory("wp_term", array("slug" => "accueil"))->posts->order_by("post_date", "DESC")->find_all() as $post): ?>

            <?php echo View::factory("wp/post", array("post" => $post)) ?>

        <?php endforeach; ?>
    </div>
    <div class="span4">
        <h3>L'AGEBdeB, c'est</h3>

        <ul>
            <li>Sophie Masson aux <?php echo HTML::mailto("interne@age.bdeb.qc.ca", "Affaires Internes") ?></li>
            <li>Vincent Antaki à <?php echo HTML::mailto("coordo@age.bdeb.qc.ca", "Coordinnation Générale") ?></li>
            <li>Rémi Daigle et Corinne Arsenault à la <?php echo HTML::mailto("permanence@age.bdeb.qc.ca", "permanence") ?></li>
            <li>Émile Nadeau à la <?php echo HTML::mailto("finance@age.bdeb.qc.ca", "Trésorie") ?></li>
            <li>Sébastien Bégin aux <?php echo HTML::mailto("communications@age.bdeb.qc.ca", "Communications") ?></li>
        </ul>

        <h3>Contacter l'Association</h3>

        <h5>En personne</h5>
        <p>Au local S-159, pavillion Ignace-Bourget</p>

        <h5>Par téléphone</h5>
        <p>(514) 332-3000 poste 7580</p>

        <h5>Par courriel</h5>
        <?php echo HTML::mailto('age@age.bdeb.qc.ca') ?>

        <h5>En ligne</h5>
        <?php $contact = Model::factory("contact") ?>

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

    </div>
</div>
