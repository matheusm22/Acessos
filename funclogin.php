<?php
    session_start();
     //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $user = $_POST['user'];
        $senha = $_POST['senha'];
        $setor = $_POST['setor'];

        // print_r('user: ' . $user);
        // print_r('<br>');
        // print_r('senha: ' . $senha);
        // print_r('<br>');
        // print_r('setor: ' . $setor);
        // print_r('<br>');


        
         $sql = " SELECT * FROM acessos WHERE usuario = '$user' and senha = '$senha' limit 1";
        $result = $conexao->query($sql);

       //usar isso aqui para CADASTRAR OS userS NÃO ESQUECER!!! 
      // $result = mysqli_query($conexao, "INSERT INTO usuarios(user,senha) VALUES ('$user','$senha')");

        
        

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['user']);
            unset($_SESSION['senha']);
            unset($_SESSION['setor']);
            header('Location: login.php');
        }
        else
        {
            $dadosUsuario = mysqli_fetch_assoc($result);
        
            $_SESSION['user'] = $dadosUsuario['user'];
            $_SESSION['senha'] = $dadosUsuario['senha'];
            $_SESSION['setor']= $dadosUsuario['setor'];
            header('Location: index.php');

            // caso o de cima não funcione
            // while ($dados = mysqli_fetch_assoc($result)) {
            //     $_SESSION['user'] = $dados['user'];
            //     $_SESSION['senha'] = $dados['senha'];
            //     $_SESSION['setor']= $dados['setor'];
            // }
            
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>