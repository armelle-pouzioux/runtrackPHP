<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT * FROM etudiants WHERE prenom LIKE 'T%'");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabT =$req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjour09.css">
    <title>Prénom T</title>
</head>
<body>
    <table>
        <tr>
            <?php
            foreach($tabT[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        foreach($tabT as $T){
            echo "<tr>";
            foreach($T as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>