<?php
session_start();

  $ConfirmacaoSenha = $_POST['confirmaSenha'];
  $user_username = $_SESSION['usuario'];
  $senha = $_POST['novaSenha'];
  
  $connect = mysqli_connect('localhost', 'DocLab', '33622905', 'DocumentosLab');
  
$query="SELECT id_users FROM users WHERE nome = '$user_username '";
             
      $verifica = mysqli_query($query,$connect);
       
       
        if ($senha == $ConfirmacaoSenha ){
      $trocasenha="UPDATE users SET senha = md5('$senha') WHERE where  id_users= '$verifica';";
      echo'troca feita com sucesso';

die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }