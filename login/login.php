<?php
session_start();

if (isset($_COOKIE['username'])) {
    $_SESSION["username"] = $_COOKIE['username'];
    header("Location: ../translator/trans.php");
}
$message = null;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "Plop" && $password == "1234") {
        $_SESSION["username"] = $username;
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + 60 * 60 * 24 * 1);
        }
        header("Location: ../translator/trans.php");
    } else {
        $message = "<p style='color: red'>Bad Credentials !</p>";
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
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