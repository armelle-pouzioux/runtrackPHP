<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT nom, capacite FROM salles");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabSalles =$req->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjour09.css">
    <title>Nom et capacité des Salles</title>
</head>
<body>
    <table>
        <tr>
            <?php
            foreach($tabSalles[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        foreach($tabSalles as $salles){
            echo "<tr>";
            foreach($salles as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>