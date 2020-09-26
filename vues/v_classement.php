
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./vues/css/class.css">

    <title>Document</title>
</head>
<body>
    <?php 
$i =1;
require("./vues/v_entete.php");
?>
<table>
    <tr>
        <th>
            numéro
        </th>
        <th>
            pseudo
        </th>
        <th>
            nb vote
        </th>
    </tr>




<?php
foreach($tab as $data){
    if($i==1){
        echo '<tr class="premier"><td>'.$i.'</td> <td>'.$data['pseudo'].'</td><td>'.$data['nb_vote'].'</td><tr/>';

    }else if($i==2){
        echo '<tr class="deuxieme"><td>'.$i.'</td> <td>'.$data['pseudo'].'</td><td>'.$data['nb_vote'].'</td><tr/>';

    }else if($i==3){
        echo '<tr class="troisieme"><td>'.$i.'</td> <td>'.$data['pseudo'].'</td><td>'.$data['nb_vote'].'</td><tr/>';

    }else if($i%2==1){
        echo '<tr class="bin"><td>'.$i.'</td> <td>'.$data['pseudo'].'</td><td>'.$data['nb_vote'].'</td><tr/>';

    }else{
        echo '<tr class="ter"><td>'.$i.'</td> <td>'.$data['pseudo'].'</td><td>'.$data['nb_vote'].'</td><tr/>';

    }
  
    $i +=1;
}

?>
</table>
</body>
</html>
