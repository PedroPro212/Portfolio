<?php
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $entrar = $_POST['Entrar'];
    $conn = mysqli_connect('127.0.0.1','root', '1234', 'portfolio');

    $query = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
    $verifica = mysqli_query($conn, $query) or die("erro ao entrar");

    if(mysqli_num_rows($verifica)<=0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../adm/login.html';</script>";
        die();
    }else{
        echo "<script language='javascript' type='text/javascript'>
        alert('DEUUUUUU PORRA DO CARALHO');window.location
        .href='../adm/login.html';</script>";
    }
?>