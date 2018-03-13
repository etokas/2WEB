<?php

interface UserManagerInterface {

    public function authenticate($username, $password);

}