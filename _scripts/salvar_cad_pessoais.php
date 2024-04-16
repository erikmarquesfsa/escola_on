<?php
include "config.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$funcao = $_POST['funcao'];

echo "<pre>";
print_r($_POST);
echo "</pre>";

$sql = "INSERT INTO cad_pessoais (nome,email,cep,endereco,bairro,cidade,funcao) VALUES ('$nome','$email','$cep','$endereco','$bairro','$cidade','$funcao')";
$query = $mysqli->query($sql);

if($query){
    echo "Rodou lindo!";
}else{
    echo "Deu ruim!";
}




?>