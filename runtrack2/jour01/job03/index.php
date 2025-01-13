<?php
// variables primitives
$booleanVar = true; //boolean
$intVar = 42; //entier
$stringVar = "LaPlateforme"; //chaîne de caractère
$floatVar = 3.14; //nombre à virgule flottante
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color:rgba(143, 15, 15, 0.57);
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Tableau des Variables PHP</h2>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Boolean</td>
            <td>$booleanVar</td>
            <td><?php echo $booleanVar ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>Entier</td>
            <td>$intVar</td>
            <td><?php echo $intVar; ?></td>
        </tr>
        <tr>
            <td>Chaîne de caractères</td>
            <td>$stringVar</td>
            <td><?php echo $stringVar; ?></td>
        </tr>
        <tr>
            <td>Flottant</td>
            <td>$floatVar</td>
            <td><?php echo $floatVar; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>