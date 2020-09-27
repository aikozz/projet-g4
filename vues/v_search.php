<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    require("./vues/v_entete.php"); 
    ?>
   
    <br/>
    <H3>voici votre recherche pour le mot: <?php echo $n?></H3>
    <br>

    voici la liste des sujets 
    
    <table>
        
        <?php
        
        foreach($tab as $index){

                    echo '<tr><td> <a href="index.php?controle="c_mess"&action="show"&id="'.$index['id_topic'].'">' .$index['titre'] . '</a><td/></tr>';

        }
        
        ?>

    </table>
    <?php
    require("./vues/v_pied.php");
    ?>

</body>
</html>