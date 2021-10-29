<?php
/**
 * Created by PhpStorm.
 * User: ggdu1
 * Date: 04/12/2017
 * Time: 13:56
 */

?>


<section id="work">
    <h3>Mes Travaux</h3>
    <div class="work-container">
        <ul>

            <!--<li class="new-work  work-terenia">
                <article>
                    <div class="illustration-container">
                        <a target="_blank" href="">
                            <img src="img/work-terenia.png" alt="##############################">
                        </a>
                    </div>
                    <div class="content">
                        <h4>

                        </h4>
                        <p>

                        </p>
                        <ul class="tags ">

                        </ul>
                    </div>
                </article>
            </li>-->


            <?php
            $work = [
                [
                    'css_class' => 'work-fenua-creations',
                    'img_path' => 'img/work-fenua-creations.png',
                    'title' => 'Fenua Créations',
                    'desc' => 'Fenua Créations est une société créée en 2002 à Papeete, spécialisée dans l\'impression
                            d\'étiquettes adhésives en rouleaux et matériel d\'impression.
                            A présent, une équipe expérimentée est en mesure de conseiller et de fournir une clientèle
                            désireuse de trouver le produit le plus adapté à leur contrainte d\'étiquetage.',
                    'site_url' => 'http://www.fenuacreations.pf',
                    'tags' => [
                        "html", "css", "javascript", "jquery", "php"
                    ],
                ],
                [
                    'css_class' => 'work-lucid-dream-prod',
                    'img_path' => 'img/work-lucid-dream-prod.png',
                    'title' => 'Lucid Dream Prod',
                    'desc' => 'Lucid Dream Prod. est un collectif indépendant audio-visuel.
Publicité, Vidéos clip, Aftermovie, Motion Design, Animation 2D /3D, Montage et VFX, une variété de services sont proposés, pour apporter des solutions aux projets de communication digitaux.
En 2015, Je développe une solution pour leur permettre de présenter leurs travaux vidéos et leurs photos de tournage. Aujourd’hui Lucid dream Prod a beaucoup évolué avec une gamme de service élargie. Un projet de refonte web est déjà lancé pour  2018.
',
                    'site_url' => '#',
                    'tags' => [
                        "illustrator", "html", "css", "javascript", "jquery", "php", "mysql", "responsive design"
                    ],
                ],
                [
                    'css_class' => 'work-autosecuritas',
                    'img_path' => 'img/work-autosecuritas.png',
                    'title' => 'Autosecuritas',
                    'desc' => 'La Coopérative A3S ( autosecuritas.fr ), née de la volonté de quelques chefs d’entreprise indépendants, précurseurs du contrôle technique automobile de proposer à ses 	sociétaires un modèle d’entreprise différent, loin des schémas financiers traditionnels et qui garantit à chacun de ses membres l’assurance d’une indépendance préservée au service de la sécurité routière. 
J’ai eu l\'opportunité de travailler une année comme développeur web sur cette application web.
',
                    'site_url' => 'https://www.autosecuritas.fr',
                    'tags' => [
                        "illustrator", "photoshop", "html", "css", "javascript", "jquery", "php", "symfony3", "mysql", "responsive design", "sass"
                    ],
                ],
                [
                    'css_class' => 'work-desqq',
                    'img_path' => 'img/work-desqq.png',
                    'title' => 'Desqq',
                    'desc' => 'Desqq est un outil d\'organisation personnel, basé sur un principe de bureau digital, où
notes, listes de tâches et dossiers sont déplaçables au grès du besoin. Un service intuitif, qui ne cesse de s\'améliorer et qui permet aux utilisateur de rapidement sauvegarder toute information.
Un outils que je développe sur mon temps libre, inspiré par le besoin de l’un de mes ex-collaborateurs, d’une application pour pouvoir s\'organiser le plus vite possible.
',
                    'site_url' => 'http://www.desqq.com',
                    'tags' => [
                        "illustrator", "photoshop", "html", "css", "javascript", "backbone.js", "php", "symfony3", "mysql"
                    ],
                ],
                [
                    'css_class' => 'work-jkleinjunge',
                    'img_path' => 'img/work-jkleinjunge.png',
                    'title' => 'Jkleinjunge',
                    'desc' => 'jkleinjunge.com est mon portfolio web, chaque année jkleinjunge.com subit une refonte générale de façon à rester une vitrine efficace, représentative de mes compétences en design et en développement.',
                    'site_url' => 'http://www.jkleinjunge.com/2017',
                    'tags' => [
                        "illustrator", "photoshop", "html", "css", "javascript", "php", "sass"
                    ],
                ],
            ];

            foreach ($work as $entry) {

                ?>
                <li class="work">
                    <article class="<?= $entry["css_class"]; ?>">
                        <div class="illustration-container">
                            <a target="_blank" href="<?= $entry["site_url"]; ?>">
                                <img src="<?= $entry["img_path"]; ?>" alt="##############################">
                            </a>
                        </div>
                        <div class="content">
                            <h4>
                                <?= $entry["title"]; ?>
                            </h4>
                            <p>
                                <?= $entry["desc"]; ?>
                            </p>
                            <ul class="tags ">
                                <?php foreach ($entry["tags"] as $tag) { ?>
                                    <li><span class="tag"> <?= $tag ?></span></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </article>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>