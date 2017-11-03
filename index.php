<!doctype html>
<html lang="fr" >
<head>
    <title>OGP - Outils de Gestion Personnels</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <script src="https://use.fontawesome.com/c15d6c3134.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
</head>

<body>
    <h1><?php echo 'Ajouter un tableau'; ?></h1>
    <form action="ajouterTableau.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br />
        <input type="submit" value="T&eacute;l&eacute;charger" name="submit">
    </form>
    <div>
        <?php
            $dir = "uploads/";
            $dh  = opendir($dir);
            while (false !== ($filename = readdir($dh))) {
                $files[] = $filename;

            }

            sort($files);
            print_r($files);

            echo '<div class="ui cards">';

            foreach ($files as $file) {
                if(strlen($file) > 2) {
                    ?>
                    <div class="ui card">
                        <div class="image">
                            <img src="uploads/<?php echo $file; ?>">
                        </div>
                        <div class="content">
                            <a class="header">Stevie Feliciano</a>
                            <div class="meta">
                                <span class="date">Joined in 2014</span>
                            </div>
                            <div class="description">
                                Stevie Feliciano is a library scientist living in New York City. She likes to spend her
                                time reading, running, and writing.
                            </div>
                        </div>
                        <div class="extra content">
                            <a>
                                <i class="user icon"></i>
                                22 Friends
                            </a>
                        </div>
                    </div>
                <?php
                }
            }

            echo '</div>';
        ?>
    </div>
</body>
</html>
