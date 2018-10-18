<?php
//conecta-se ao banco de dados

try {
     $dbc= mysqli_connect('107.180.46.155', 'DocLab', '33622905', 'DocumentosLab');
            
            // obtem os dados do formulario digitados pelo usuario
           $doc = $_POST['doc'];
           $Senha = $_POST['Senha'];


           $query ="insert into documento (tipo)values('$doc');";
     
$data= mysqli_query($dbc, $query);
        
$dbc = null;

header("Location: /Doc/relacaoDoc.php");

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}  