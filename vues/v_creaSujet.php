<?php

if(!empty($_POST)){

    if(!empty($_POST['message'])){

        $_POST['message'] = htmlspecialchars($_POST['message']);
        
        extract($_POST);

        addMessage($message);

        header('location:'.$_SERVER['PHP_SELF']);
        exit();
    }
} else{
    $erreurs[] = "Merci de remplir tous les champs";
}

require_once('v_entete.php');

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/creaSujet.css">
</head>

<div class="row">
    <div class="col">
        <form action="" method="post" class="pt-4">
            <h2 class ="Msg">Ajout d'un Topic</h2>
            <?php if (empty($erreurs)) {
            ?>
                <div class="alert alert-danger dng"><?php echo implode('<br>', $erreurs) ?></div>
            <?php
            }
            ?>
            <!-- .form-group>label+input.form-control -->
            <div class="saisieTitre">
                <label for="pseudo">Titre :</label>
                <input type="text" class="form-control <?php echo (!empty($_POST) && empty($_POST['pseudo'])) ? 'is-invalid' : '' ?>" id="pseudo" name="pseudo" value="<?php echo $_POST['pseudo'] ?? '' ?>">
            </div>

            <div class="saisie">
                <label for="message">Message :</label>
                <textarea name="message" id="message" rows="5" class="form-control <?php echo (!empty($_POST) && empty($_POST['message'])) ? 'is-invalid' : '' ?>"><?php echo $_POST['message']  ?? '' ?></textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-primary pad" value="Enregistrer">
            </div>
        </form>
    </div>
</div>
<div class="row mt-4">

<?php
require_once('v_pied.php');
?>