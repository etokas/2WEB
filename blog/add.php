<?php
session_start();

include_once __DIR__ . "/classes/manager/SimplePostManager.class.php";

if (isset($_POST['title']) && isset($_POST['body'])) {
    $manager = new SimplePostManager();
    $manager->addPost($_POST['title'], $_POST['body'], unserialize($_SESSION['user']));
    header("Location: list.php");
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un post</title>
</head>
<body>

<h2>Ajouter un post</h2>

<form method="post">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title"> <br>
    <label for="body">Contenu</label>
    <textarea name="body" id="body" cols="30" rows="10"></textarea>
    <input type="submit" value="Enregistrer">
</form>


</body>
</html>