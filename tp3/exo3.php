<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
portraits($portrait1);
portraits($portrait2);
portraits($portrait3);
portraits($portrait4);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style1.css">
        <title>tp3</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        <p><?php function portraits($array) { ?></p>
            <p><?= $array ['name'] . ' ' . $array ['firstname'] ?></p>
            <img src="<?= $array['portrait'] ?>" alt=""/>
            <p><?php } ?></p>
    </body>
</html>
