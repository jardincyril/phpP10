<?php include 'controllerForm.php' ?>
<!DOCTYPE html>
<html lang = "fr" dir = "ltr">
    <head>
        <link rel="stylesheet" href="vsr.css">
            <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet"> 
        <meta charset = "utf-8" />
        <title>TP2</title>
    </head>
    <body>
        <a href="index.php">home</a>
          <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
            <p><?= $gender ?></p>
            <p><?= $lastName ?></p>
            <p><?= $firstName ?></p>
            <p><?= $age ?></p>
            <p><?= $society?></p>
            <!--Sinon affiche le formulaire-->
        <?php } else { ?>
        <form action="index.php" method="POST">
             <div class="form-group">
                    <label for = "gender">Civilité : </label>
                    <select class="form-control" name = "gender">
                        <option value="1"<?= ((!empty($civilityContent)) && ($civilityContent == 1)) ? 'selected' : ''?>>Mr</option>
                        <option value="2"<?= ((!empty($civilityContent)) && ($civilityContent == 2)) ? 'selected' : ''?>>Mme</option>
                        <option value="3"<?= ((!empty($civilityContent)) && ($civilityContent == 3)) ? 'selected' : ''?>>autre</option>
                    </select>
                    <label for="exp">Nom</label>
                    <input class="form-control"  id="lastName" type="text" name="lastName" value="<?= isset($lastName) ? $lastName : '' ?>" />
                           <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                    <label for="firstName">Prénom</label>
                    <input class="form-control" id="firstName" type="text" name="firstName" value="<?= isset($firstName) ? $firstName : '' ?>" />
                    <p class="text-danger"><?= isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
                    <label for="dateOfBirth">Âge</label>
                    <input class="form-control" id="age" name="age" value="<?= isset($age) ? $age : '' ?>" />
                    <p class="text-danger"><?= isset($formError['age']) ? $formError['age'] : ''; ?></p>
                    <label for="exp">Société</label>
                    <input class="form-control"  id="society" type="text" name="society" value="<?= isset($society) ? $society : '' ?>" />
                           <p class="text-danger"><?= isset($formError['society']) ? $formError['society'] : ''; ?></p>
            <input class="form-control" type="submit" value="Envoyer" name="submit"/>
        </form>
            <?php } ?>
    </body>
</html>