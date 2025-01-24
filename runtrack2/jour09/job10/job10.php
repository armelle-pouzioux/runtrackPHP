<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT * FROM salles ORDER BY capacite ASC");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabasc =$req->fetchAll();

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
            foreach($tabasc[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        
        foreach($tabasc as $asc){
            echo "<tr>";
            foreach($asc as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>