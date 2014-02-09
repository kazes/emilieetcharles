<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
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


        <div class="page-width">
            <?php for ($i = 1; $i <= 100; $i++) { ?>
                page-width <?php echo $i; ?><br/>
            <?php } ?>
        </div>

        <div class="page-width" id="footer">

            hello footer

        </div>
        
    </div>



    <!-- JQUERY javascript library -->
    <script src="js/jquery-1.11.0.min.js"></script>

    <!-- all custom scripts in base.js -->
    <script src="js/base.js"></script>
</body>
</html>