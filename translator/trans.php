<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Al - Bhed translator</title>
</head>
<body>

<?php
if (isset($_SESSION["username"])) {
    echo "<h1> Hello " .  $_SESSION["username"] . "</h1>";
}
?>

<a href="../login/logout.php">Se deconnecter</a>

<form method="post" action="file.php">
    <label for="text">Texte à traduire : </label>
    <input type="text" name="text" id="text">
    <button type="submit">Envoyer</button>
</form>
</body>
</html>