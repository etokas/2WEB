<?php

class PdoPostManager implements PostManagerInterface {

    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:dbname=2web;host=localhost", "root", "root");
    }

    public function addPost($title, $body, User $user)
    {

    }

    public function findAllPosts()
    {

    }

    public function findPostById($id)
    {

    }

    public function removePost($id)
    {

    }
}