<?php
//conecta-se ao banco de dados
try {
       $dbc= mysqli_connect('107.180.46.155','DocLab', '33622905', 'DocumentosLab');
            
            // obtem os dados do formulario digitados pelo usuario
           $Usu = $_POST['nome'];
           $Senha = $_POST['senha'];
           $Mail  = $_POST['email'];
           $cargos = $_POST['cargo'];
           if($cargos == 'R.H'){
               $cargos = 2;
           }else{
               $cargos =1;
           }
          
           $query ="insert into users values (null,'$Usu','$Senha','$Mail','$cargos');";
     
$data= mysqli_query($dbc, $query);

$dbc = null;
header("Location: /Doc/AdmFucionario.php");

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}  