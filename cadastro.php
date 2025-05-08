<?php
include ("conexao.php");

$nome=$_POST['username'];
$email=$_POST['email'];
$senha=$_POST['password'];
$telefone=$_POST['phone'];

$sql="INSERT INTO usuarios(nome,email,senha, telefone)
VALUES ('$nome', '$email' , '$senha' ,'$telefone')";

if (mysqli_query ($conexao,$sql)) {
    header('Location: dashboard.php');
 } else {
     echo "erro" . mysqli_connect_erro($conexao);
 }

mysqli_close($conexao);
?>