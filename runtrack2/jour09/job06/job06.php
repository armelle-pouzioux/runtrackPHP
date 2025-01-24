<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT COUNT(*) AS nombre_etudiants FROM etudiants");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabnb =$req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjour09.css">
    <title>Nombre étudiant</title>
</head>
<body>
    <table>
        <tr>
            <?php
            foreach($tabnb[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        foreach($tabnb as $nb){
            echo "<tr>";
            foreach($nb as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>