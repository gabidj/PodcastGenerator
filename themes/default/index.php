<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo htmlspecialchars($config["podcast_title"]); ?></title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($config["theme_path"]); ?>style/bootstrap.css">
    <meta charset="utf-8">
</head>

<body>
    <?php
    include "js.php";
    include "navbar.php";
    ?>
    <br>
    <div class="container">
        <?php
        include "jumbotron.php";
        ?>
        <div class="row">
            <?php
            // IF name was passed, do this instead
            if(isset($_GET[$link])) {
                include 'singleepisode.php';
            }
            else {
                include 'listepisodes.php';
            }
            ?>
        </div>
        <hr>
        <p>Powered by <a href="http://podcastgenerator.net">Podcast Generator</a>, an open source podcast publishing solution | Theme based on <a href="https://getbootstrap.org">Bootstrap</a></p>
    </div>
</body>

</html>