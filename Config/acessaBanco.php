<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$endereco = '107.180.46.155';
$usuario ='DocLab';
$senha = '33622905';
$database = 'DocumentoLab';

$conexao = mysqli_connect($endereco, $usuario, $senha, $database);

if(!$conexao){
	die("Falha na conexao" . mysqli_connect_error());
}else{
	echo "Conexao realizada com sucesso";
}

    