<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de poste</title>
</head>
<body>

<h1>Liste de poste</h1>

<?php
include_once __DIR__ . "/classes/manager/SimplePostManager.class.php";

$manager = new SimplePostManager();
?>

<a href="add.php">Ajouter un post</a> <br>

<?php $posts = $manager->findAllPosts(); ?>

<table>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Body</th>
        <th>date</th>
        <th>Author</th>
    </tr>

    <?php /** @var Post $post */?>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post->getId() ?></td>
            <td><?php echo $post->getTitle()?></td>
            <td><?php echo $post->getBody()?></td>
            <td><?php echo $post->getPublicationDate()?></td>
            <td><?php echo $post->getUser()?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>