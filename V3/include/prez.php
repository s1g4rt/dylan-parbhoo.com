<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.:E.T:.</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/style.css" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    </head>
    <body class="container-fluid">
        <header class="row">
            <?php
            require 'navbar.php';
            ?>
        </header>
        <div id="content" class="row">
            <?php
            require 'qui.php';
            require 'portfolio.php';
            require 'projets.php';
            ?>
        </div>
        <footer class="row">
            <?php
            require 'footer.php';
            ?>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
