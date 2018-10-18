<?php
//conecta-se ao banco de dados
try {
       $dbc=  mysqli_connect('107.180.46.155', 'DocLab', '33622905', 'DocumentosLab');
            
            // obtem os dados do formulario digitados pelo usuario
          $codDoc = $_POST['codigo'];
        
       
        
        
          if ($_POST["codigo"] != "")   { 
           
  $query ="DELETE FROM `DocumentosLab`.`documento` WHERE `id_documento`='".$codDoc."';";
     
$data= mysqli_query($dbc, $query);

$dbc = null;
header("Location: /Doc/relacaoDoc.php");
          }else{
              echo "campo vazio";
          }
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
} 