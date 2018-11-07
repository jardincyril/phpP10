<?php
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vsr.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" crossorigin="anonymous">
        <title>TP1</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="offset-2 col-8 offset-2">
                    <a href="index.php">Home</a>
                    <p>
                        <?php
                        if (isset($_POST['submit'])) {
                            ?>
                        </p>
                        <p>Nom :
                            <?php
                            //si $_post nest pas vide
                            if (!empty($_POST['lastname'])) {
                                //si lastname est bien conforme a la regex
                                if (preg_match($regexName, $_POST['lastname'])) {
                                    //lastname s'affiche
                                    echo $_POST['lastname'];
                                    //si lastname est pas correcte
                                } else {
                                    //on affiche un message d'erreur
                                    echo 'veuillez vérifier que vous avez bien saisie votre Nom de famille';
                                }
                            }
                            ?>
                        </p>
                        <p>Prénom :
                            <?php
                            if (!empty($_POST['firstname'])) {
                                if (preg_match($regexName, $_POST['firstname'])) {
                                    echo $_POST ['firstname'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre Prénom';
                                }
                            }
                            ?>
                        </p>
                        <p> Date de Naissance :
                            <?php
                            if (!empty($_POST['birthDay'])) {
                                if (preg_match($regexDate, $_POST['birthDay'])) {
                                    echo $_POST ['birthDay'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre date d\'anniversaire';
                                }
                            }
                            ?>
                        </p>
                        <p> Pays de Naissance :
                            <?php
                            if (!empty($_POST['originalCountry'])) {
                                if (preg_match($regexText, $_POST['originalCountry'])) {
                                    echo $_POST ['originalCountry'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre pays de naissance';
                                }
                            }
                            ?>
                        </p>
                        <p>Nationalité :
                            <?php
                            if (!empty($_POST['nationality'])) {
                                if (preg_match($regexText, $_POST['nationality'])) {
                                    echo $_POST ['nationality'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre nationalité';
                                }
                            }
                            ?>
                        </p>
                        <p>adresse :
                            <?php
                            if (!empty($_POST['address'])) {
                                if (preg_match($regexAddress, $_POST['address'])) {
                                    echo $_POST ['address'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre adresse';
                                }
                            }
                            ?>
                        </p>
                        <p>Email :
                            <?php
                            if (!empty($_POST['mail'])) {
                                if (preg_match($regexMail, $_POST['mail'])) {
                                    echo $_POST ['mail'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre adresse mail';
                                }
                            }
                            ?>
                        </p>
                        <p>Téléphone :
                            <?php
                            if (!empty($_POST['phoneNumber'])) {
                                if (preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
                                    echo $_POST ['phoneNumber'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre Numéro de Téléphone';
                                }
                            }
                            ?>
                        </p>
                        <p>Diplôme :
                            <?php
                            if (!empty($_POST['grade'])) {
                                if (preg_match($regexNumberLetter, $_POST['grade'])) {
                                    echo $_POST ['grade'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre Niveau de Diplôme';
                                }
                            }
                            ?>
                        </p>
                        <p>Numéo pôle emploi :
                            <?php
                            if (!empty($_POST['poleEmploiNumber'])) {
                                if (preg_match($regexNumberLetter, $_POST['poleEmploiNumber'])) {
                                    echo $_POST ['poleEmploiNumber'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre Numéro pôle emploi';
                                }
                            }
                            ?>
                        </p>
                        <p>Numéro de badge :
                            <?php
                            if (!empty($_POST['badgeNumber'])) {
                                if (preg_match($regexPhoneNumber, $_POST['badgeNumber'])) {
                                    echo $_POST ['badgeNumber'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie votre Nombre de badge';
                                }
                            }
                            ?>
                        </p>
                        <p>liens codecademy :
                            <?php
                            if (!empty($_POST['codecademy'])) {
                                if (preg_match($regexText, $_POST['codecademy'])) {
                                    echo $_POST ['codecademy'];
                                } else {
                                    echo 'veuillez vérifier que vous avez bien saisie le liens de codecademy';
                                }
                            }
                            ?>
                        </p>
                        <p>Si vous étiez un super héros/une super héroïne ? :
                            <?php
                            if (!empty($_POST['superHero'])) {
                                if (preg_match($regexText, $_POST['superHero'])) {
                                    echo $_POST ['superHero'];
                                }
                            }
                            ?>
                        </p>
                        <p>Racontez-nous un de vos "hacks" :
                            <?php
                            if (!empty($_POST['hacks'])) {
                                if (preg_match($regexText, $_POST['hacks'])) {
                                    echo $_POST ['hacks'];
                                }
                            }
                            ?>
                        </p>
                        <p>Avez vous déjà eu une expérience avec la programmation ? :
                            <?php
                            if (!empty($_POST['progExp'])) {
                                if (preg_match($regexText, $_POST['progExp'])) {
                                    echo $_POST ['progExp'];
                                }
                            }
                        } else {
                            ?>
                        </p>
                        <form action="exo1.1.php" method="POST">
                            <label for = "lastname">Nom : </label>
                            <input id="lastname" class="form-control" type = "text" name = "lastname" value="<?= !empty($_POST['lastname']) ? $_POST['lastname'] : NULL; ?>"/>
                            <label for = "firstname">Prénom : </label>
                            <input id="firstname" class="form-control" type = "text" name = "firstname" value="<?= !empty($_POST['firstname']) ? $_POST['firstname'] : NULL; ?>"/>
                            <label for = "birthDay">Date de naissance : </label>
                            <input id="birthDay" class="form-control" type = "date" name = "birthDay" value="<?= !empty($_POST['birthDay']) ? $_POST['birthDay'] : NULL; ?>"/>
                            <label for = "originalCountry">Pays de naissance : </label>
                            <input id="originalCountry" class="form-control" type = "text" name = "originalCountry" value="<?= !empty($_POST['originalCountry']) ? $_POST['originalCountry'] : NULL; ?>"/>
                            <label for = "nationality">Nationalité : </label>
                            <input id="nationality" class="form-control" type = "text" name = "nationality" value="<?= !empty($_POST['nationality']) ? $_POST['nationality'] : NULL; ?>"/>
                            <label for = "address">Adresse : </label>
                            <input id="address" class="form-control" type = "text" name = "address" value="<?= !empty($_POST['address']) ? $_POST['address'] : NULL; ?>"/>
                            <label for = "mail">Email : </label>
                            <input id="mail" class="form-control" type ="email" name = "mail" value="<?= !empty($_POST['mail']) ? $_POST['mail'] : NULL; ?>"/>
                            <label for = "phoneNumber">Téléphone : </label>
                            <input id="phoneNumber" class="form-control" type = "text" name = "phoneNumber" value="<?= !empty($_POST['phoneNumber']) ? $_POST['phoneNumber'] : NULL; ?>"/>
                            <label for = "grade">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : </label>
                            <input id="grade" class="form-control" type = "text" name = "grade" value="<?= !empty($_POST['grade']) ? $_POST['grade'] : NULL; ?>"/>
                            <label for = "poleEmploiNumber">Numéro pôle emploi : </label>
                            <input id="poleEmploiNumber" class="form-control" type = "text" name = "poleEmploiNumber" value="<?= !empty($_POST['poleEmploiNumber']) ? $_POST['poleEmploiNumber'] : NULL; ?>"/>
                            <label for = "badgeNumber">Nombre de badge : </label>
                            <input id="badgeNumber" class="form-control" type="number" name="badgeNumber" value="<?= !empty($_POST['badgeNumber']) ? $_POST['badgeNumber'] : NULL; ?>"/>
                            <label for = "codecademy">Liens codecademy : </label>
                            <input id="codecademy" class="form-control" type = "text" name = "codecademy" value="<?= !empty($_POST['codecademy']) ? $_POST['codecademy'] : NULL; ?>"/>
                            <label for = "superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                            <textarea id="superHero" class="form-control" rows = "4" cols = "50" name = "superHero" value="<?= !empty($_POST['superHero']) ? $_POST['superHero'] : NULL; ?>"></textarea>
                            <label for = "hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                            <textarea id="hacks" class="form-control" rows = "4" cols = "50" name = "hacks" value="<?= !empty($_POST['hacks']) ? $_POST['hacks'] : NULL; ?>"></textarea>
                            <label for = "progExp">Avez vous déjà eu une expérience avec la programmation ou l'informatique avant de remplir ce formulaire ?</label>
                            <textarea id="progExp" class="form-control" rows="4" cols="50" name="progExp" value="<?= !empty($_POST['progExp']) ? $_POST['progExp'] : NULL; ?>"></textarea>
                            <input type="submit" name="submit" value="Envoyer !" />
                        </form>
                        <p>
                            <?php
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
