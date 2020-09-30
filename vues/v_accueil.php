<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./vues/css/acc.css">

    <title>Accueil</title>
</head>
<body>
    <?php 
    require("./vues/v_entete.php"); 
    ?>
<div>
        <table class="">
            <tr>
                <th class="first">
                    <u><p>grande ligne partie 1</p></u>
                </th>
            </tr>
            <tr>
                <td>
                    <div class="part">
                        <u>
                            <a href="index.php?controle=c_topic&action=showTop&id=1&nom=Categorie1">ceci est un test</a>
                        </u>
                        <br />
                        <p>ceci est le descriptif de cette partie</p>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <div class="part">
                        <u>
                            <a href="#">ceci est un deuxieme test</a>
                        </u>

                        <br />
                        <p>ceci est le descriptif de cette partie</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="part">
                        <u>
                            <a href="#">ceci est un deuxieme test</a>
                        </u>
                        <br />
                        <p>ceci est le descriptif de cette partie</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="grand">
                   <u><p>grande ligne partie 2</p></u> 
                </th>
            </tr>
            <tr>
                <td>
                    <div class="part">
                        <u>
                            <a href="#">ceci est un test</a>
                        </u>
                        <br />
                        <p>ceci est le descriptif de cette partie</p>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <div class="part">
                        <u>
                            <a href="#">ceci est un test</a>
                        </u>
                        <br />
                        <p>ceci est le descriptif de cette partie</p>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <div class="part">
                        <u>
                            <a href="#">ceci est un test</a>
                        </u>
                        <br />
                        <p>ceci est le descriptif de cette partie</p>
                    </div>

                </td>
            </tr>
        </table>
    </div>
   
</body> 
<footer><?php require("./vues/v_pied.php") ?></footer>
</html>