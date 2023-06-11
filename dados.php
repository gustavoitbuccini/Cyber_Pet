<?php

$hostname = "db4free.net";
$username = "gustafacul23";
$password = "4567uytrfghj";
$database = "facultidados";


$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_errno) {
    echo "Falha na Conexão";
}
else {
    echo "Conexão Realizada";
}
?>
