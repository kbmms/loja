<?php

$valid_passwords = array ("admin" => "12345");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

header('Content-Type: application/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=relatorio.csv');
header('Pragma: no-cache');
readfile("relatorio.csv");

?>