<?php
//déclaration des variables pour les regex 
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexAge = '/^[0-9]{1,2}$/';
$regexSociety = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
//déclaration des variables vides pour le nom des inputs
$civility = '-civilité-';
$lastname = '';
$firstname = '';
$age = '';
$society = '';
//Vérification que civility existe et qu'il n'est pas vide
if (!empty($_POST['civility'])) {
    $civility = $_POST['civility'];
}
//Vérification que lastname existe et qu'il n'est pas vide       
if (!empty($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
//Vérification que firstname existe et qu'il n'est pas vide 
if (!empty($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
//Vérification que age existe et qu'il n'est pas vide 
if (!empty($_POST['age'])) {
    $age = $_POST['age'];
}
//Vérification que society existe et qu'il n'est pas vide 
if (!empty($_POST['society'])) {
    $society = $_POST['society'];
}

//fonction pour tester la regex et pour retourner le resultat
function testingAndReturn($inputChoice, $regexChoice) {
    if (!empty($inputChoice)) {
        if (preg_match($regexChoice, $inputChoice)) {
            ?><p class="validate"><?= $inputChoice ?></p>   
            <?php
        } else {
            ?><p class="wrong"><?= 'Merci de remplir correctement ce champ' ?></p>
            <?php
        }
    }
}

function displayValue($inputChoice) {
    if (isset($inputChoice)) {
        echo $inputChoice;
    } else {
        echo '';
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" /> 
        <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet" /> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet" />
        <link rel="stylesheet" href="tp2.css" />
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <form action="#" method="POST">
            <ul>
                <li><i class="fas fa-bolt"></i>
                    <label for="civility">Civilité : </label>
                    <select id="civility" name="civility">
                        <option selected disabled >- Civlité -</option>
                        <option value="Monsieur" <?= ($civility == 'Monsieur') ? 'selected' : '' ?>>Monsieur</option>
                        <option value="Madame" <?= ($civility == 'Madame') ? 'selected' : '' ?>>Madame</option>
                    </select>
                </li>
                <li><i class="fas fa-bolt"></i><label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" value="<?php displayValue($lastname) ?>"/></li>
                <li><i class="fas fa-bolt"></i><label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" value="<?php displayValue($firstname) ?>"/></li>
                <li><i class="fas fa-bolt"></i><label for="age">Age : </label><input type="text" name="age" id="age" value="<?php displayValue($age) ?>"/></li>
                <li><i class="fas fa-bolt"></i><label for="society">Société : </label><input type="text" name="society" id="society" value="<?php displayValue($society) ?>"/></li>               
                <li><i class="fas fa-bolt"></i><label for="send">envoyer : </label><input id="send" name="send" type="submit" /></li>
            </ul>
        </form>
        <ul class="none">
            <li><p>civilité : <?php echo $civility ?></p></li>
            <li><p>Nom : </p><?php testingAndReturn($lastname, $regexName) ?></li>
            <li><p>Prénom : </p><?php testingAndReturn($firstname, $regexName) ?></li>
            <li><p>Age : </p><?php testingAndReturn($age, $regexAge) ?></li>
            <li><p>Société : </p><?php testingAndReturn($society, $regexSociety) ?></li>
        </ul>
    </body>
</html>