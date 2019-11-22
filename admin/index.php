<?php
require "checkLogin.php";
require "../core/include_admin.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo htmlspecialchars($config["podcast_title"]); ?> - Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../core/bootstrap/style.css">
    <style>
        iframe {
            width: 1000px;
            height: 500px;
        }
    </style>
</head>

<body>
    <?php
    include "js.php";
    include "navbar.php";
    ?>
    <br>
    <div class="container">
        <h1>Welcome to your Podcast Generator Admin Interface</h1>
        <?php
        if ($config["enablepgnewsinadmin"] == "yes") {
            echo '<iframe width="100%" src=' . $news_url . '></iframe>';
        }
        ?>
    </div>
</body>

</html>