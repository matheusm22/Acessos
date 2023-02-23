<?php

    include_once('config.php');

    if (isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $setor = $_POST['setor'];
    

        
        $sqlUpdate = "UPDATE emails SET nome='$nome',email='$email', senha='$senha', setor='$setor' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

     }
     header('Location: admin.php');

?>