<?php defined('SYSPATH') or die('No direct script access.'); ?>

<!DOCTYPE html>

<html>
    <head><?php echo View::factory("layout/head") ?></head>

    <body>

        <?php echo View::factory("menu/principal") ?>

        <div class="container-fluid">


            <div class="row-fluid">
                <div class="span3">

                    <h2>Secrétariat et Archives</h2>
                    <p>Cette personne est responsable des convocations des <strong>Assemblées Générales</strong> et du Conseil Exécutif; et prépare les documents nécéssaire à la tenue de leurs séances. Elle assure également le suivi des décisions prises lors des réunions et voit à la coordinnation des différentes instances délibérantes de l'Association. Elle doit également s'assurer des archives, de la tenue des procès verbaux et des enregistrements légaux de l'Association.</p>

                    
                    <h2>Affaires Externes</h2>
                    <p>Cette personne entretient des relations avec les autres associations étudiantes et regroupements étudiants du Québec. Elle est déléguée lors des congrès et des rencontres de celles-ci ainsi que lors des réunions des organismes dont l’Association fait partie. Elle défend les positions de l’Association et les intérêts de ses membres en fonction des mandats issus de l’Assemblée Générale. En somme, elle assure le lien entre les membres de l’Association et les autres organisations étudiantes du Québec ou d’ailleurs.</p>                 
               
                   
                    <h2>Commission Électorale</h2>

                    <p>Les commissaires électoraux sont</p>

                    <ul>
                        <li>Guillaume Poirier-Morency</li>
                        <li>Élyse Noël-Gauthier</li>
                        <li>Hugues Pellerin</li>
                    </ul>

                    <p>Ces commissaires s'assurent du bon déroulement du processus électoral. Pour tous commentaires, envoyez un courriel à <?php echo HTML::mailto("elections@age.bdeb.qc.ca") ?>.</p>
                

                </div>
                <div class="span6">
                    
                    <div class="hero-unit">
                        <h1 class="text-center">Élections du Conseil Exécutif 2013-2014</h1>
                        <h2>La période de candidature est ouverte pour tous les postes du Conseil Exécutif.</h2>
                    </div>

                    <div class="well">

                        <?php echo $content ?>

                    </div>


                </div>
                <div class="span3">

                    <h2>Vie Étudiante</h2>
                    <p>Cette personne voit l’organisation d’événements sportifs, sociaux, culturels ou autres. Elle coordonne son travail de concert avec les autres personnes ou groupes travaillant à la vie étudiante du Collège. Son travail repose sur son initiative ainsi que les demandes de projets spéciaux, tant internes qu’externes.</p>        


                    <h2>Affaires Internes</h2>
                    <p>Cette personne s'occupe des relations avec les comités et voir à leur coopération mutuelle. Elle voit aussi à la communication entre ses comités et le Conseil Exécutif. Elle doit, de plus, s'assurer de la saine gestion des comités. Finalement, elle s'occupem de la convocation et de la préparation de la Table des Comités (TC).</p>

                    <h2>Affaires Administratives</h2>
                    <p>Cette personne est responsable de la gestion financière et de la tenue de livres comptables de l’Association. Elle prépare et gère les budgets et vois à la préparation des bilans liés au budget. Elle est chargée de faire certifier les états financiers par un vérificateur une fois par année. Elle assure le suivi mensuel des budgets des comités. Cette personne est de plus signataire et autorise les dépenses effectuées par l’Association et ses comités. En somme, elle s’assure que le Conseil Exécutif et les membres peuvent avoir l’heure juste sur les finances de l’Association et voit à une bonne gestion courante des finances de l’Association.</p> 


                </div>
            </div>

            <div class="row-fluid">
                <div class="span3">
                    <h2>Affaires Pédagogiques</h2>
                    <p>Cette personne a la charge de la préparation de la <strong>Table des Représentants de Programme</strong> (TP) et coordonne les représentants élus à la Commission des Études, où elle doit d'ailleurs absolument siéger. Elle s'assure que l'Association informe et conseille ses membres en matière de pédagogie. Elle s'occupe également de tout ce qui a trait aux plaintes étudiantes. Elle peut finalement représenter l'Association sur des enjeux pédagogiques à l'extérieur du cégep.</p>

                </div>
                <div class="span3">
                    
                    
                    <h2>Communications</h2>
                    <p>Cette personne voit à informer les membres des services, positions et activités offertes par l'Association. Elle recueuille pour le Conseil Exécutif les commentaires des membres sur les buts, activités et services de l'Association. Elle assure également le suivi des correspondances destinées à l'Association. Elle offre un soutien à la conception et à la réalisation des campagnes d'information des activités organisées par l'Association, ses comités et ses organismes affiliés. Elle est également la personne responsable des communications de l'Association par Internet.</p>

                </div>

                <div class="span3">
                    <h2>Appui aux Luttes Sociales</h2>
                    <p>Cette personne est d’assurer un suivi sur les dossiers d’ordre politique. Elle organise au besoin des activités de sensibilisation aux positions défendues par l’Association, à la politique, et à l’engagement citoyen en général. Elle s’assure de la liaison entre l’Association et les syndicats du Collège, les organismes communautaires, sociaux et politiques. Elle prépare et informe l’Association des éléments nouveaux portés à son attention.</p>                  

                </div>

                <div class="span3">
                     <h2>Coordonnateur Général</h2>
                    <p>Cette personne est la responsable en chef de l’Association et son porte-parole. Elle assure la préparation des séances du CE et assure le suivi des décisions. Elle est également signataire et autorise toutes les dépenses relatives au fonctionnement courant de l’Association. De manière générale, elle assure la coordination de l’ensemble des élus de l’Association, des personnes qui s’y impliquent bénévolement et des employés de l’Association.</p>               

                </div>

            </div>

        </div>
        
    </body>
</html>
