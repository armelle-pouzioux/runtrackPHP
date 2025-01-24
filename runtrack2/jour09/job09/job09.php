<?php
$pdo = new PDO ("mysql:host=localhost;dbname=jour08;charset=utf8", "root");

$req = $pdo -> prepare("SELECT * FROM salles ORDER BY capacite DESC");
$req -> setFetchMode(PDO::FETCH_ASSOC);
$req -> execute();
$tabdesc =$req->fetchAll();

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
            foreach($tabdesc[0] as $key =>$value){
                echo "<th>".$key."</th>";
            }
            ?>
        </tr>
        <?php
        
        foreach($tabdesc as $desc){
            echo "<tr>";
            foreach($desc as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> 
</body>
</html>