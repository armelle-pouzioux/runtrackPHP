<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT SUM(superficie) AS superficie_totale FROM etage");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabsup =$req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjour09.css">
    <title>superficie</title>
</head>
<body>
    <table>
        <tr>
            <?php
            foreach($tabsup[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        
        foreach($tabsup as $sup){
            echo "<tr>";
            foreach($sup as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>