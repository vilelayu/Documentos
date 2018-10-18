<?php
session_start();

  $login = $_POST['email'];
  
  $senha = $_POST['pass'];
  
  $connect = mysqli_connect('107.180.46.155', 'DocLab', '33622905', 'DocumentosLab');
  
$query="SELECT id_users FROM users WHERE nome = '$login' AND senha = '$senha'";
             
      $verifica =  mysqli_num_rows(mysqli_query($connect,$query));
      
       if ($verifica >0){
        $_SESSION['usuario'] = $_POST['email'];
        
       header("Location:MenuFuncionario.php");
die();
       }else{
     setcookie("login",$login);
     header("Location:index.php");
        }