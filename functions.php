<?php

$elements = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

if (isset($_GET["length"])) {
    $generatedPassword = substr(str_shuffle($elements), 0, $_GET["length"]);
} elseif (!isset($_GET["length"])) {
    $generatedPassword = substr(str_shuffle($elements), 0, 0);
}
