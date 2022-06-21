<?php

session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //acessa
        include_once ('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: '.$email.'<br>');
        // print_r('Senha: '.$senha.'<br>');

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);
        if(mysqli_num_rows($result) < 1)
        {
            //não existe user
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            print_r('Usuário não cadastrado no sistema');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            //existe user
            header('Location: sistema.php');
        }
    }
    else
    {
        // não acessa
        header('Location: login.php');
    }
?>