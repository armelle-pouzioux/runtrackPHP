<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tester les arguments POST</h1>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username" placeholder="Entrez username"><br><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password" placeholder="Entrez password"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

    
    if( $username === "John" & $password === "Rambo" ){
            echo "c'est pas ma guerre";
        }else{
            echo "votre pire cauchemar";
        }
    }
    ?>
</body>
</html>
