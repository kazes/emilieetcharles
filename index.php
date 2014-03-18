<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700|Merriweather:400,300,700,400italic,300italic,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/base.css" type="text/css">

    <title>Emilie & Charles</title>
</head>

<body>
    <div id="content">

        <?php
            // layers names
            $layer_1 = 'mariage';
            $layer_2 = 'demande';
            $layer_3 = 'sorganiser';
            $layer_4 = 'partager';
            $layer_5 = 'liste-de-mariage';
            $layer_6 = 'questions';
        ?>

        <!-- HEADER -->
        <div id="header">
            <div class="page-width">
                <ul id="nav">
                    <li id="nav-1"><a class="JS_scroll-to" href="#<?php echo $layer_1; ?>">Le mariage</a></li>
                    <li id="nav-2"><a class="JS_scroll-to" href="#<?php echo $layer_2; ?>">La demande</a></li>
                    <li id="nav-3"><a class="JS_scroll-to" href="#<?php echo $layer_3; ?>">S'organiser</a></li>
                    <li id="nav-4"><a class="JS_scroll-to" href="#<?php echo $layer_1; ?>" title="Retour en haut de page">Accueil</a></li>
                    <li id="nav-5"><a class="JS_scroll-to" href="#<?php echo $layer_4; ?>">Partager</a></li>
                    <li id="nav-6"><a class="JS_scroll-to" href="#<?php echo $layer_5; ?>">Liste de mariage</a></li>
                    <li id="nav-7"><a class="JS_scroll-to" href="#<?php echo $layer_6; ?>">Contact</a></li>
                </ul>
            </div>
        </div>


        <!-- SCROLL BUTTONS -->
        <div class="scroll-buttons">
            <a id="bt-prev-layer" class="icon icon-arrow-up JS_scroll-to">u</a>
            <a id="bt-next-layer" class="icon icon-arrow-down JS_scroll-to">d</a>
        </div>


        <div class="page-content">
            <!-- 1) LE MARIAGE -->
            <div id="<?php echo $layer_1; ?>" class="layer page-width">
                <img src="img/data/cover.png" class="img-100 ma db" alt="Emilie et Charles, le 2 Mai 2014 à Bénodet">
                <p class="text">
                    Émilie + Charles = <3 : C’est la seule équation que Charles ait jamais réussi à résoudre…
                    et encore il a mis 8 ans !
                </p>
            </div>


            <!-- 2) LA DEMANDE -->
            <div class="bg-marroon">
                <div id="<?php echo $layer_2; ?>" class="page-width layer">
                    <div class="story-container">
                        <h2 class="title">
                            Émilie a dit oui !
                        </h2>
                        <p class="story">
                            Emilie a dit « oui » ! Enfin, plutôt « vâng », <br>
                            parce que c’était sur la Baie d’Ha Long l’été dernier,<br>
                            un bel endroit pour se jeter à l’eau, non ?<br>
                            Depuis, nous n’avons pas touché terre.<br>
                            Nous n’accosterons que le 2 mai prochain à Bénodet.<br>
                            <br>
                            <br>
                            Nous comptons sur vous pour fêter ça !
                        </p>
                    </div>
                </div>
            </div>

            
            <!-- 3) S'ORGANISER -->
            <div id="<?php echo $layer_3; ?>" class="page-width layer">
                <img class="db img-100 ma" src="img/data/le-premier-mai.png" alt="Le premier mai. Ce week-end là, c'est sûr vous n'acheterez pas de muguet">

                <div class="program-container">
                    <div class="line">
                        <div class="program unit size1of3">
                            <div class="inside">
                                <img class="img-100 image" src="img/data/entete-mariage.png" alt="Mariage"/>
                                <h4 class="title">vendredi 2 mai - 15h30</h4>
                                <p class="text text-normal-1">
                                    Nous nous marions ! <br>
                                    Rendez-vous à l’église St Thomas Becket, <br>
                                    sur le port de Bénodet.
                                </p>
                                <p class="link-more">
                                    <a title="plan de Bénodet (pdf)" href="http://www.benodet.fr/modules/kameleon/upload/BD_Benodet_plan_21x27_1305.pdf">rendez vous au mariage</a>
                                </p>
                            </div>
                        </div>

                        <div class="program unit size1of3">
                            <div class="inside ma">
                                <img class="img-100 image" src="img/data/entete-reception.png" alt="Réception"/>
                                <h4 class="title">vendredi 2 mai - 18h</h4>
                                <p class="text text-normal-1">
                                    Nous célébrons ! Au manoir de Kerouzien, <br>
                                    à Plomelin, pour un cocktail suivi d’un dîner <br>
                                    & d’une soirée jusqu’au petit matin.
                                </p>
                                <p class="link-more">
                                    <a title="Trajet de Bénodet centre au Manoir de Kerouzien (avec google map)" href="https://www.google.com/maps/preview/dir/La+Croisette+Caf%C3%A9,+Quai+du+Commandant+l'Herminier,+29950+B%C3%A9nodet,+France/SARL+Manoir+de+Kerouzien,+Kerouzien,+29700+Plomelin,+France/@47.8962699,-4.1795827,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x4810d2efdc682f93:0x672bb8b6ce9703f7!2m2!1d-4.115871!2d47.87654!1m5!1m1!1s0x4810d34a152e5547:0x661e4bc5306224b1!2m2!1d-4.149309!2d47.90746" target="_blank">rendez vous à la réception</a>
                                </p>
                            </div>
                        </div>

                        <div class="program unit size1of3 line">
                            <div class="inside fr">
                                <img class="img-100 image" src="img/data/entete-brunch.png" alt="Brunch"/>
                                <h4 class="title">samedi 3 mai - 12h30</h4>
                                <p class="text text-normal-1">
                                    Retour au manoir de Kerouzien, à Plomelin, <br>
                                    pour un déjeuner breton, <br>
                                    le corps fourbu mais l’esprit léger.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pointilles"></div>

                    <div class="accomodation">
                        <div class="line accomodation-container">
                            <div class="program unit size1of2">
                                <div class="inside">
                                    <img class="img-100 image" src="img/data/entete-tourisme.png" alt="Tourisme"/>
                                    <h4 class="title">jeudi 1er mai - dimanche 4 mai</h4>
                                    <p class="text text-normal-1">
                                        C’est très beau la Bretagne, <br>
                                        profitez-en vous aussi, <br>
                                        de votre week-end du 1er mai !
                                    </p>
                                    <p class="link-more">
                                        <a href="#">découvrez la région</a>
                                    </p>
                                </div>
                            </div>

                            <div class="program unit size1of2">
                                <div class="inside ma">
                                    <img class="img-100 image" src="img/data/entete-et-la-nuit.png" alt="Et la nuit ?"/>
                                    <h4 class="title">hôtels, b&b, etc.</h4>
                                    <p class="text text-normal-1">
                                        Rien ne sert de courir, <br>
                                        il faut dormir dans le coin ! <br>
                                        Réservez vite, c’est un long week-end  !
                                    </p>
                                    <p class="link-more">
                                        <a href="#">trouvez votre hôtel</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- 4) PARTAGER -->
            <div class="bg-marroon">
                <div id="<?php echo $layer_4; ?>" class="page-width layer">
                    <img class="title img-100" src="img/data/partagez-vos-meilleurs-moments.png" alt="Soyez au courant des dernières infos. Partagez vos meilleurs moments. Avec l'application Wedding Party">

                    <div class="smartphone">
                        <a target="_blank" href="http://itunes.apple.com/us/app/wedding-party/id494214305" class="iphone">Pour iPhone</a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.micromobs.pkk" class="android">Pour android</a>
                    </div>

                    <p class="text">
                        après l’installation, recherchez notre mariage “emilie&charles”
                        pour centraliser  vos photos et vos commentaires
                    </p>
                </div>
            </div>



            <!-- 5) LISTE DE MARIAGE -->
            <div id="<?php echo $layer_5; ?>" class="page-width layer">
                <img class="title img-100" src="img/data/liste-de-mariage.png" alt="Liste de mariage. Si vous souhaitez nous offrir un petit cadeau pour bien commencer notre vie à deux !"/>
                <a href="http://charlesetemilie.zankyou.com/fr/liste-de-mariage" class="bt-visitez">
                    <span class="intext">visitez notre liste de mariage</span>
                </a>
            </div>


            <!-- 6) QUESTIONS -->
            <div class="bg-marroon">
                <div id="<?php echo $layer_6; ?>" class="page-width layer">
                    <img class="db ma img-100" src="img/data/dautres-questions.png" alt="D'autres questions ?">

                    <div class="line contact-container">
                        <p class="contact unit size1of3">
                            <span class="ttu db font-18 merriweather-bold">écrivez-nous ?</span>
                            <a href="mailto:charlesandemilie@gmail.com">charlesandemilie@gmail.com</a>
                        </p>

                        <p class="contact unit size1of3">
                            <span class="ttu db font-18 merriweather-bold">appelez émilie</span>
                            06 99 35 00 22
                        </p>

                        <p class="contact unit size1of3">
                            <span class="ttu db font-18 merriweather-bold">appelez charles</span>
                            06 59 71 13 61
                        </p>
                    </div>

                    <img class="db ma img-100" src="img/data/a-tres-bientot-le-2-mai-2014.png" alt="à très bientôt le 2 mai 2014">

                </div>
            </div>


            <!-- FOOTER -->
            <div class="page-width" id="footer">
                Copyright © 2014 <a href="http://www.papadiv.com" target="_blank">Florian</a> et <a href="http://www.berenicek.com" target="_blank">Bérénice</a>.
                Design by <a href="http://www.berenicek.com" target="_blank">Bérénice</a>.
                Code by <a href="http://www.papadiv.com" target="_blank">Florian</a>
            </div>
        </div>
    </div>



    <!-- JQUERY javascript library -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <!-- all custom scripts in base.js -->
    <script src="js/base.js"></script>
</body>
</html>