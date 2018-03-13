<?php

include_once __DIR__ . "/../entities/User.class.php";

interface PostManagerInterface {

    public function addPost($title, $body, User $user);

    public function findAllPosts();

    public function findPostById($id);

    public function removePost($id);

}