<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabbtw =$req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjour09.css">
    <title>capacite</title>
</head>
<body>
    <table>
        <tr>
            <?php
            foreach($tabbtw[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        
        foreach($tabbtw as $btw){
            echo "<tr>";
            foreach($btw as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>