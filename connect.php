<?php
$host = "revoshop.mysql.dbaas.com.br";
$user = "revoshop";
$senha = "APfL47qp6G2X!!";
$db = "revoshop";

$conn = mysqli_connect($host, $user, $senha, $db) or die("<h1>Nao foi possivel se conectar ao banco de dados.</h1>");

function generateHash($length = 32){
    $characters = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $charactersLength = strlen($characters);
    $hashString = '';
    for($i = 0; $i < $length; $i++){
        $hashString .= $characters[rand(0,$charactersLength -1)];
    }
    return $hashString;
}

?>