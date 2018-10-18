<?php
//conecta-se ao banco de dados
try {
    $dbc= mysqli_connect('107.180.46.155','DocLab', '33622905', 'DocumentosLab');
            // obtem os dados do formulario digitados pelo usuario
           $idUp = $_POST['codigo'];
           $Status = $_POST['status'];
     // echo '<pre>'; var_dump($_POST); die();
          
           $query ="UPDATE upload SET `situacao_ID_SITUACAO`='$Status' WHERE `id_upload`='$idUp';";
     
$data= mysqli_query($dbc, $query);

$dbc = null;
header("Location: /Doc/GerenciaDoc.php");

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}