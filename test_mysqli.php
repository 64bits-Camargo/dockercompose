<?php
/**$mysqli_connection = new MySQLi('HOST', 'USUARIO', 'SENHA', 'BASE'); */
$mysqli_connection = new MySQLi('db', 'root', 'myrootpass', 'mydb');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "Conectado!";
}
?>