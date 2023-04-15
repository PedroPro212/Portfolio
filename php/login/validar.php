<?php

    require_once '../../class/server.php';
    $conn = new Conn();
    session_start();

    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $entrar = $_POST['Entrar'];

    $email = $_SESSION['email'];

    $resultado = strval($txt1) . strval($txt2) . strval($txt3) . strval($txt4);

    Validar($email,$resultado);
    
    function Validar($email,$resultado){
        $comparar = "SELECT email, codigo_acesso FROM login WHERE email='$email' AND codigo_acesso='$resultado'";
        $conn = new Conn();
        $result = mysqli_query($conn->conn(), $comparar) or die(mysqli_error($conn->conn()));

        if(mysqli_num_rows($result)<=0){
            echo "<script language='javascript' type='text/javascript'>
            alert('Código não confere');window.location
            .href='../../adm/login/codigo.html';</script>";
        }else{    
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='../../adm/home/home.html';</script>";
            return true;
        }
    }
?>