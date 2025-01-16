<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 6</title>
</head>
<body>
    <h1>Job 6</h1>
    <form action="" method="get">
        <label for="nombre">Nombre :</label>
        <input type="number" id="nombre" name="nombre" placeholder="Entrez nombre"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    
    // Parcourir chaque élément de $_GET
    foreach ($_GET as $key => $value) {
        // Vérifier si la valeur n'est pas vide
        if ($value % 2 === 0) {
            echo "Nombre pair";
        }else{
            echo"Nombre impair";
        }
    }
    ?>
</body>
</html>