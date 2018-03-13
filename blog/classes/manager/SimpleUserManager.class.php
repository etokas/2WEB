<?php

include_once "UserManagerInterface.class.php";
include_once __DIR__ . "/../entities/User.class.php";

class SimpleUserManager implements UserManagerInterface {

    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = [];
        }
    }

    public function authenticate($username, $password)
    {
        if ($username === "test@test.com" && $password === "1234") {
            $user = new User();
            $user->setEmail($username);
            $user->setFirstName("Test");
            $user->setPassword($password);
            $user->setId(10);
            $_SESSION["user"] = serialize($user);
        } else {
            throw new \Exception();
        }
    }
}