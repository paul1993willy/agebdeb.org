
<section class="row">

    <div class="span12">

        <h1>Présentation</h1>
        <p>
            L'AGEBdeB, c'est l'Association Générale Étudiante de Bois-de-Boulogne ou, en d'autres termes, l'association étudiante du collège Bois-de-Boulogne. Tous les étudiants de Bois-de-Boulogne en font partie.
        </p>
        <p>
            L'AGEBdeB, en plus de vous informer et d'organiser des actions de mobilisation, défend les étudiants et étudiantes à l'intérieur comme à l'extérieur du Collège. Aussi, elle s'assure du respect de leurs droits et offre un éventail de services non négligeable pour une meilleure qualité de vie étudiante.
        </p>
        <p>
            L'AGEBdeB fonctionne selon le principe d'assemblées générales. Cela veut donc dire que ce sont ses membres qui décident, et non pas le conseil exécutif. Le pouvoir vous appartient!
        </p>
        <p>
            Veuillez faire un tour au local de votre association ! S-159
        </p>
    </div>

</section>

<div class="row">
    <section class="span4">
        <h2>Actualité</h2>

        <?php foreach (ORM::factory("post")->order_by("created", "DESC")->limit(10)->find_all() as $post): ?>

            <article><?php echo View::factory("component/post", array("post" => $post)) ?></article>

        <?php endforeach; ?>

    </section>

    <section class="span8">
        <h2>Calendrier</h2>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="7"><?php echo Date::formatted_time('now', 'F Y') ?></th>
                </tr>
                <tr>
                    <th>Dim</th>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mer</th>
                    <th>Jeu</th>
                    <th>Ven</th>
                    <th>Sam</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
            </tbody>
        </table>
    </section>
</div>