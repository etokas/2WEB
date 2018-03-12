<?php

$lang = $_GET['lang'];
$message = "";
switch ($lang) {
    case 'PHP';
        $message = "You choose " . $lang;
        break;
    case 'CSS';
        $message = "You choose " . $lang;
        break;
    case 'Javascript';
        $message = "You choose " . $lang;
        break;
    case 'HTML';
        $message = "You choose " . $lang;
        break;
    default:
        $message = "Other";
        break;
}
echo $message;