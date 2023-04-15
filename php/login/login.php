<?php

    require_once '../../class/server.php';
    $conn = new Conn();
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['password'];
    $entrar = $_POST['Entrar'];

    $_SESSION['email'] = $email;

    $query = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";      // Validar usuario
    $verifica = mysqli_query($conn->conn(), $query) or die("erro ao entrar");       //Conectar ao banco para validar

    if(mysqli_num_rows($verifica)<=0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../../adm/login/login.html';</script>";
        die();
    }else{
        Gerar_Numero($email);
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../adm/login/codigo.html';</script>";
    }

    function Gerar_Numero($email){
        $aleatorio = rand(1000, 9999);          // Gerar número aleatório

        $update = "UPDATE login SET codigo_acesso = $aleatorio WHERE email = '$email'";
        $conn = new Conn();
        $result = mysqli_query($conn->conn(), $update) or die(mysqli_error($conn->conn()));
        
        if($result){
            return true;
        }else{
            echo "<script language='javascript' type='text/javascript'>
            alert('Email não está sendo recebido');
            window.location.href='../adm/login/login.html';</script>";
            return false;
        }
    }
?>