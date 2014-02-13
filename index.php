<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Merriweather:400,300,700' rel='stylesheet' type='text/css'>



    <link rel="stylesheet" href="css/base.css" type="text/css">

    <title>Emilie & Charles</title>
    <script>
        var hasJS = function() {
            var htmlTag = document.getElementsByTagName('html')[0];
            htmlTag.className = (htmlTag.className + ' ' || '') + 'hasJS';
        }();
    </script>
</head>

<body>
    <div id="content">
        <div id="header">
            <div class="page-width">
                <ul id="nav">
                    <li id="nav-1"><a href="#content">Le mariage</a></li>
                    <li id="nav-2"><a href="#content">La demande</a></li>
                    <li id="nav-3"><a href="#content">S'organiser</a></li>
                    <li id="nav-4"><a href="#content" title="Retour en haut de page">Retour en haut de page</a></li>
                    <li id="nav-5"><a href="#content">Partager</a></li>
                    <li id="nav-6"><a href="#content">Liste de mariage</a></li>
                    <li id="nav-7"><a href="#content">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="page-content">
            <div id="cover" class="page-width">

                <img src="img/data/cover.png" class="img-100 ma db" alt="Emilie et Charles, le 2 Mai 2014 à Bénodet"/>
                <p class="font-15 color-marroon-dark tac" style="padding: 35px 0 75px 0">
                    Émilie + Charles = <3 : C’est la seule équation que Charles ait jamais réussi à résoudre… et encore il a mis 8 ans !
                </p>
            </div>

            <div class="bg-marroon">
                <div class="page-width " id="yes">
                    <h2 class="font-josefin-semibold font-28 ttu">émilie a dit oui !</h2>
                    <p>
                        Emilie a dit « oui » ! Enfin, plutôt « vâng »,
                        parce que c’était sur la Baie d’Ha Long l’été dernier,
                        un bel endroit pour se jeter à l’eau, non ?
                        Depuis, nous n’avons pas touché terre.
                        Nous n’accosterons que le 2 mai prochain à Bénodet.
                        <br/>
                        <br/>
                        Nous comptons sur vous pour fêter ça !
                    </p>
                </div>
            </div>


            <?php for ($i = 1; $i <= 100; $i++) { ?>
                page-width <?php echo $i; ?><br/>
            <?php } ?>


            <div class="page-width" id="footer">

                hello footer

            </div>
        </div>
    </div>



    <!-- JQUERY javascript library -->
    <script src="js/jquery-1.11.0.min.js"></script>

    <!-- all custom scripts in base.js -->
    <script src="js/base.js"></script>
</body>
</html>