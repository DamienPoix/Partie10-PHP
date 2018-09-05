<?php
//déclaration des variables pour les regex
$regexPhone = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';  
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexUrl = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\/\=]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z-éè\ 0-9\']+$/';
$regexJobBadge = '/^[0-9A-z]+$/';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Bangers|Black+Ops+One|Bungee+Inline|Bungee+Shade|Diplomata+SC|Freckle+Face|Hanalei+Fill|Knewave|Press+Start+2P|Shrikhand|VT323" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bowlby+One+SC">
        <link rel="stylesheet" href="fuck.css">
        <title>Exercice 1</title>
    </head>
    <body>
        <?php
        if (empty($_POST)) {
            ?>
            <form action="#" method="POST">
                <ul>
                    <li><label for="lastname">Nom : </label><input type="text" id="lastname" name="lastname" /></li>
                    <li><label for="firstname">Prénom : </label><input type="text" id="firstname" name="firstname" /></li>
                    <li><label for="birthday">date de naissance : </label><input type="text" id="birthday" name="birthday" /></li>
                    <li><label for="placeOfBirth">Pays de naissance : </label><input type="text" id="placeOfBirth" name="placeOfBirth" /></li>
                    <li><label for="address">Adresse : </label><input type="text" id="address" name="address" /></li> 
                    <li><label for="mail">mail : </label><input type="text" id="mail" name="mail" /></li>
                    <li><label for="Phone">numéro de téléphone : </label><input type="text" id="phone" name="phone" /></li>
                    <li><label for="diplome">diplome</label>
                        <select id="diplome" name="diplome">
                            <option selected disabled>- Diplome -</option>
                            <option value="nothing" name="diplome">sans diplome</option>
                            <option value="bac" name="diplome">Bac</option>
                            <option value="bac+2" name="diplome" >Bac+2</option>
                            <option value="bac+3" name="diplome" >Bac+3 </option>
                            <option value="supérieur" name="diplome" >supérieur</option>
                        </select></li>
                    <li><label for="job">Numéro pole emploi : </label><input type="text" id="job" name="job" /></li>
                    <li><label for="badge">Nombre de badge : </label><input type="text" id="badge" name="badge" /></li>
                    <li><label for="codecademy">lien codecademy : </label><input type="text" id="codecademy" name="codecademy" /></li>
                    <li><label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? : </label><textarea id="hero" name="hero"></textarea></li>
                    <li><label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) </label><textarea id="hack" name="hack"></textarea></li>
                    <li><label for="send">envoyer</label><input id="send" name="send" type="submit" /></li>
                </ul>
            </form>
            <?php
        } else {
            if (isset($_POST['lastname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexName, $_POST['lastname'])) {
                        echo 'Nom : ' . $_POST['lastname'];
                    } else {
                        echo 'Merci d\'indiqué un nom valide';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['firstname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexName, $_POST['firstname'])) {
                        echo 'Prénom : ' . $_POST['firstname'];
                    } else {
                        echo 'Merci d\'indiqué un prénom valide';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['birthday'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexDate, $_POST['birthday'])) {
                        echo 'Date de naissance : ' . $_POST['birthday'];
                    } else {
                        echo 'Merci d\'indiqué une date de naissance valide';
                    }
                    ?>
                </p>
            <?php } if (isset($_POST['placeOfBirthday'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexName, $_POST['placeOfBirth'])) {
                        echo 'PAYS de naissance : ' . $_POST['placeOfBirth'];
                    } else {
                        echo 'Merci d\'indiqué un pays de naissance valide';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['address'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexAddress, $_POST['address'])) {
                        echo 'Adresse : ' . $_POST['address'];
                    } else {
                        echo 'Merci d\'indiqué une adresse valide';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['mail'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexMail, $_POST['mail'])) {
                        echo 'Mail : ' . $_POST['mail'];
                    } else {
                        echo 'Merci d\'indiqué une adresse mail valide';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['phone'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexPhone, $_POST['phone'])) {
                        echo 'Téléphone : ' . $_POST['phone'];
                    } else {
                        echo 'Merci d\'indiqué un numéro de téléphone valide';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['diplome'])) {
                ?><p><?= 'Votre diplome : ' . $_POST['diplome'] ?></p>
            <?php } else { ?>
                <p><?= 'Merci de sélectionner un diplome' ?></p>
                <?php
            }
            if (isset($_POST['job'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexJobBadge, $_POST['job'])) {
                        echo 'Numéro pole emploie : ' . $_POST['job'];
                    } else {
                        echo 'Merci d\'indiqué un numéro pole emploie valide';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['badge'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexJobBadge, $_POST['badge'])) {
                        echo 'Nombre de badge : ' . $_POST['badge'];
                    } else {
                        echo 'Merci d\'indiqué un nombre de badge valide';
                    }
                    ?>
                </p>
            <?php
            }
            if (isset($_POST['codecademy'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexUrl, $_POST['codecademy'])) {
                        echo 'Nombre de badge : ' . $_POST['codecademy'];
                    } else {
                        echo 'Merci d\'indiqué un lien valide';
                    }
                    ?>
                </p>
            <?php
            }
            if (isset($_POST['hero'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['hero'])) {
                        echo 'héro : ' . $_POST['hero'];
                    } else {
                        echo 'Merci de ne pas utilisé de ne pas utilisé de caractères spéciaux interdit';
                    }
                    ?>
                </p>
            <?php
            }
            if (isset($_POST['hero'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['hack'])) {
                        echo 'Hack : ' . $_POST['hack'];
                    } else {
                        echo 'Merci de ne pas utilisé de ne pas utilisé de caractères spéciaux interdit';
                    }
                    ?>
                </p>
                <?php
                }
                if (isset($_POST['info'])) {
                    ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['info'])) {
                        echo 'Info : ' . $_POST['info'];
                    } else {
                        echo 'Merci de ne pas utilisé de ne pas utilisé de caractères spéciaux interdit';
                    }
                    ?>
                </p>
    <?php } ?>
<?php } ?>
    </body>
</html>