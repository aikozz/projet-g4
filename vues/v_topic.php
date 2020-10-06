<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require("./vues/v_entete.php"); ?>
    <?php echo '<a href="index.php?controle=c_user&action=acc">Accueil</a> -> '.$name ; ?>
    <table>
        
        <?php
        
        foreach($listeTop as $index){

                    echo '<tr><td> <a href="index.php?controle=c_mess&action=show&id='.$index['id_topic'].'">' .$index['titre'] . '</a><td/></tr>';

        }
        
        ?>

    </table>
    <?php
    require("./vues/v_pied.php");
    ?>


</body>
</html>