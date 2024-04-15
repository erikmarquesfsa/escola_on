<?php
function dadosUser($login){
    include "config.php";
    $sql = "SELECT * FROM login WHERE nome = '$login'";
    $query  = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return ($dados['nome']);
}

?>