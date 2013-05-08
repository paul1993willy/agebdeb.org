<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="row">
    <div class="span8">

        <h1>À propos</h1>

        <p>L'Association Étudiante du Collège de Bois-de-Boulogne est un regroupement d'étudiants.</p>

        <h2>Fil d'actualité</h2>
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

        <h3>Événements</h3>


    </div>
</div>
