<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showArray($array) {
    ?><p><?= $array['name'] . ' ' . $array['firstname'] . ' : '?></p>
    <img src="<?= $array['portrait']?>" />
<?php } ?>
     <html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet"> 
        <link rel="stylesheet" href="tp3.css">
        <title>Exercice 3</title>
    </head>
    <body>  
        <?php 
        showArray($portrait1);
        showArray($portrait2);
        showArray($portrait3);
        showArray($portrait4);
        ?>
    </body>
</html>