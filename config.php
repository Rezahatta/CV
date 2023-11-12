<?php
$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'CV';

$conn = mysqli_connect($host, $user, $pw, $db);

if (!$conn) {
  die('error'. mysqli_connect_error());
}
