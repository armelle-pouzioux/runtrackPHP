<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT * FROM etudiants WHERE YEAR(CURDATE()) - YEAR(naissance) < 18 
OR (YEAR(CURDATE()) - YEAR(naissance) = 18 AND 
    (MONTH(CURDATE()) < MONTH(naissance) OR 
     (MONTH(CURDATE()) = MONTH(naissance) AND 
     DAY(CURDATE()) < DAY(naissance))))");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabunder18 =$req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjour09.css">
    <title>Moins 18</title>
</head>
<body>
    <table>
        <tr>
            <?php
            foreach($tabunder18[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        foreach($tabunder18 as $under18){
            echo "<tr>";
            foreach($under18 as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>