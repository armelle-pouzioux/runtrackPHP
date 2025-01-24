<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT prenom, nom, naissance FROM etudiants WHERE sexe ='Femme'");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabFemme =$req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjour09.css">
    <title>Femmes</title>
</head>
<body>
    <table>
        <tr>
            <?php
            foreach($tabFemme[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        foreach($tabFemme as $femme){
            echo "<tr>";
            foreach($femme as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>