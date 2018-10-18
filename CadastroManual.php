<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    $dbc= mysqli_connect('localhost', 'DocLab', '33622905', 'DocumentosLab');
            
            // obtem os dados do formulario digitados pelo usuario
           $nome = $_POST['Nome'];
           $carteiraTrabalho = $_POST['Carteira'];
           $certidaoNascimento  = $_POST['Certidão'];
           $escolaridade = $_POST['certificado'];
           $rg = $_POST['RH'];
           $pisPasep  = $_POST['PIS'];
           $crm = $_POST['crm'];
           $tituloEleitor = $_POST['titulo'];
           $conta  = $_POST['conta'];
           $cpf = $_POST ['cpf'];
           $dataNascimento = $_POST['Data'];
           $endereco = $_POST['Endereço'];
           $cargo  = $_POST['Cargo'];
           $lattes = $_POST['Currículo'];
           $idUser = $_SESSION['iduse'];
           
           $query ="insert into perfil(Nome,DataNascimento,CarteiraTrabalho,CertidaoNascimento,Escolaridade,identidade,pisPasep,CRM,TituloEleitor,conta,CPF,Cargo,lattes,IdUser) values('$nome','$dataNascimento','$carteiraTrabalho','$certidaoNascimento','$escolaridade','$rg','$pisPasep','$crm','$tituloEleitor','$conta','$cpf','$cargo','$lattes','$idUser');";
     
$data= mysqli_query($dbc, $query);
echo 'saulvo com sucesso';

/* Redireciona pro diretorio desejado */
header("Location: /SistemaDocumento/MenuFuncionario.php");
 
exit;

  