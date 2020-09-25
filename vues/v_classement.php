
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
    echo '<tr><td>'.$i.'</td> <td>'.$data['pseudo'].'</td><td>'.$data['nb_vote'].'</td><tr/>';
  
    $i +=1;
}

?>
</table>
</body>
</html>
