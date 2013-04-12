<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />

        <title>Élections du Conseil Exécutif 2013-2014</title>
        <?php echo HTML::style("asset/css/bootstrap.min.css") ?>
        <?php echo HTML::style("asset/css/elections.css") ?>

    </head>

    <body>

        <?php echo View::factory("menu/principal") ?>

        <div class="container-fluid">


            <div class="row-fluid">
                <div class="span3">
                    <h2>Secrétariat et Archives</h2>

                    <p>Le coordonnateur ou la coordonnatrice au Secrétariat et aux Archives se charge de convoquer les Assemblées Générale et d’en préparer le déroulement. La personne occupant ce poste collabore avec le coordonnateur ou la coordonnatrice Général-e  pour faire le suivi des décisions. De plus, il est responsable de l’aspect légal de l’Association et de ses archives.</p>

                    <h2>Communications</h2>

                    <p>Le Coordonnateur ou la Coordonnatrice aux Communications s’occupe de promouvoir les services, positions et activités de l’Association Étudiante. La personne occupant ce poste entretient des liens professionnels avec divers médias, participe à la conception et et à la réalisation des diverses campagnes publicitaires au sein de l’Association et prend en charge la gestion du site Internet et les divers comptes sur les réseaux sociaux appartenant à l’Association Étudiante.</p>

                    <h2>Affaires Internes</h2>
                    <p>Le coordonnateur ou la coordonnatrice aux Affaires Internes gère les comités de l’Association et s’occupe des relations entre ceux-ci.</p>
                    <h2>Affaires Pédagogiques</h2>
                    <p>Le coordonnateur ou la coordonnatrice aux Affaires Pédagogiques est en charge des étudiants membres de la Commission des études. La personne occupant le poste informe et conseille l’Association en matière de pédagogie, s’occupe des griefs étudiants et siège sur les organismes pédagogique dont l’Association fait partie.</p>


                </div>
                <div class="span6">
                    <div class="hero-unit">
                        <h1 class="text-center">Élections du Conseil Exécutif 2013-2014</h1>
                        <h2>La période de candidature est ouverte pour tous les postes du Conseil Exécutif.</h2>

                        <div class="well">

                            <?php echo $content ?>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <h2>Affaires Externes</h2>
                            <p>Le Coordonnateur ou la Coordonnatrice aux Affaires Externes...</p>
                        </div>
                        <div class="span6">
                            <h3>Commission Électorale</h3>

                            <p>Les commissaires électoraux sont</p>

                            <ul>
                                <li>Guillaume Poirier-Morency</li>
                                <li>Élyse Noël-Gauthier</li>
                                <li>Hugues Pellerin</li>
                            </ul>

                            <p>Ces commissaires s'assurent du bon déroulement du processus électoral. Pour tous commentaires, envoyez un courriel à <?php echo HTML::mailto("elections@age.bdeb.qc.ca") ?>.</p>
                        </div>
                    </div>

                </div>
                <div class="span3">
                    <h2>Appui aux Luttes Sociales</h2>

                    <p>Le coordonnateur ou la coordonnatrice à l’Appui aux Luttes Sociales s’occupe des dossiers d’ordre politique et conseille l’Association dans ses prises de position politique. La personne occupant le poste organise aussi des activités respectant et promouvant les prises de position de l’Association, s’assure de la communication avec les syndicats du collège et la communauté locale et contacte des organisations sociales et politiques pour informer l’Association sur l’actualité dans ce milieu.</p>

                    <h2>Vie Étudiante</h2>

                    <p>Le Coordonnateur ou la Coordonnatrice à la vie étudiante se charge de l’organisation d’évènements sportifs, sociaux, culturels et autres, selon les demandes des étudiants et étudiantes. La personne occupant ce poste reçoit et examine les demandes de projets spéciaux, internes ou externes.</p>
                    <h2>Affaires Administratives</h2>
                    <p>Le coordonnateur ou la coordonnatrice aux Affaires Administratives est responsable des fonds et des états financiers de l’Association Étudiante. La personne occupant le poste doit planifier les budgets et les rapports financiers annuels, veiller au financement de l’Association et autoriser les dépenses de l’Association Étudiante lorsque ces dernières sont justifiées.</p>
                    <h2>Coordonnateur Général</h2>
                    <p>Le coordonnateur ou la coordonnatrice Général-e est le porte-parole officiel de l’Association Étudiante. L’étudiant ou étudiante occupant ce poste s’occupe de préparer des plans d’actions, d’assister les autres exécutants et exécutantes dans leurs dossiers, d’assurer le suivi des décisions prises par le conseil exécutif et d’autoriser les dépenses de l’Association Étudiante et ses comités.</p>
                </div>
            </div>



        </div>
    </body>

</html>
