<?php

$elements = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

if (!empty($_GET["length"])) {
    $generatedPassword = substr(str_shuffle($elements), 0, $_GET["length"]);
}