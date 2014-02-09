<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
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

        <?php include('inc/header.inc.php'); ?>
        
        <div id="page">



        </div><!-- #page -->
        
        <?php include('inc/footer.inc.php'); ?>
        
    </div><!-- #content -->



    <!-- JQUERY javascript library -->
    <script src="js/jquery-1.11.0.min.js"></script>

    <!-- all custom scripts in base.js -->
    <script src="js/base.js"></script>
</body>
</html>