<?php
include "config.php";
$login = $_POST['username'];
$senha = $_POST['password'];

//Verificar se o login existe
$rs = "SELECT nome FROM login WHERE nome = '$login'";
$query = $mysqli->query($rs);
$total = $query->num_rows;

if($total>=1){

    $rs = "SELECT nome,senha FROM login WHERE nome = '$login' AND senha = '$senha'";
    $query = $mysqli->query($rs);
    $total = $query->num_rows;

    if($total>=1){
        echo "<script>window.location='../template/cad_dados_pessoais.php'</script>";

    }else{
        echo "<script>alert('Senha inválida');</script>";
        echo "<script>window.location='../index.html'</script>";
    }

}else{
    echo "<script>alert('Login inválido');</script>";
    echo "<script>window.location='../index.html'</script>";
}


?>