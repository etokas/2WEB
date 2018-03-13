<?php

include_once __DIR__ . "/../entities/Post.class.php";
include_once __DIR__ . "/../entities/User.class.php";
include_once "PostManagerInterface.class.php";

class SimplePostManager implements PostManagerInterface {


    public function __construct()
    {
        if (!isset($_SESSION['posts'])) {
            $_SESSION['posts'] = [];
        }
    }

    public function addPost($title, $body, User $user)
    {
        $post = new Post();
        $post->setId($this->generateId());
        $post->setTitle($title);
        $post->setBody($body);
        $post->setUser($user);
        $post->setPublicationDate(date("d/m/Y"));
        $_SESSION['posts'][$post->getId()] = serialize($post);
    }

    public function findAllPosts()
    {
        $data = array_map(function ($post) {
            return unserialize($post);
        }, $_SESSION['posts']);

        return $data;
    }

    public function findPostById($id)
    {
        return unserialize($_SESSION['posts'][$id]);
    }

    public function removePost($id)
    {
        unset($_SESSION['posts'][$id]);
    }

    public function generateId()
    {
        do {
            $id = rand(1,20);
        } while (array_key_exists($id, $_SESSION['posts']));

        return $id;
    }
}