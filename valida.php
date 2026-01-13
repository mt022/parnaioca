<?php
session_start();
include_once("conexao.php"); // Certifique-se que $conn é a conexão

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios 
        WHERE usuario='$usuario' 
        AND senha='$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login realizado com sucesso!";
    header ("location:formdois.php");
} else {
    echo "Usuário ou senha incorretos.";
}
