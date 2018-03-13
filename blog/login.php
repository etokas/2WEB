<?php
session_start();

include_once "classes/manager/SimpleUserManager.class.php";

$manager = new SimpleUserManager();
$message = null;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    try {
        $manager->authenticate($_POST["username"], $_POST["password"]);
        header("Location: list.php");
    } catch (\Exception $exception) {
        $message = "<p style='color: red'>Bad Credentials !</p>";
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>
</head>
<body>

<?php
echo ($message != null) ? $message : null;
?>

<form method="post">
    <label for="username">Nom d'utilisateur</label>
    <input type="text" name="username" id="username">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Se souvenir de moi</label>
    <input type="submit" value="Se connecter">
</form>
</body>
</html>