<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require("v_entete.php")?>
    <?php //echo '<a href="index.php?controle=c_user&action=acc">Accueil</a> -> '.$name  ;*
    
    ?>
    <div class="row m-1">
     <div class="col-12 p-2 border  text-center">
         <h2> <?php echo $titre[0]['titre']; ?></h2>
     </div>
    </div>
     <div class="row m-1">
     <div class="col-2 p-2 border  text-center"><?php echo getNameUser($prems[0]['id_user']) ?></div>
            <div class="col-10 border rounded d-flex flex-wrap" >
                <p class="p-2 w-100 text-justify"><?php echo $prems[0]['contenu'] ?>
                
                </p>
              <a class="align-self-end  glyphicon glyphicon-thumbs-up " href="#"></a>
              <a class="  " href="#"><span class="glyphicon glyphicon-envelope"></span></a>
            </div>
        </div>
    <?php foreach($tab as $data){ ?>


        <div class="row m-1">
     <div class="col-2 p-2 border  text-center"><?php echo getNameUser($data['id_user']) ?></div>
            <div class="col-10 border rounded d-flex flex-wrap" >
                <p class="p-2 w-100 text-justify"><?php echo $data['contenu'] ?>
                    
                </p>
              
            </div>
        </div>



    <?php } ?>
    
</body>
</html>