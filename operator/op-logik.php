<?php

$username = "";
$email = "admin@ku";
$password = "123";

echo "Username / Email: <b>{$username} {$email}</b> <br>";
echo "Password: <b>{$password}</b><br>";
echo "cek login: ";
echo (($username  == "admin" || $email == "admin@ku")   &&  ($password == "123"));