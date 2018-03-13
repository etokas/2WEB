<?php

unset($_SESSION['username']);

setcookie("username", "", 1);

header('Location: login.php');