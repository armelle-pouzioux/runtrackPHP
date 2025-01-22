<?php
session_start();

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
} else {
    $_SESSION['nbvisites']++;
}

echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

