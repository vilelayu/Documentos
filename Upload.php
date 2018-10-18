<?php
session_start();
// DEFINIÇÕES
// Numero de campos de upload
$numeroCampos = 9;
// Tamanho máximo do arquivo (em bytes)
$tamanhoMaximo = 1000000000;
// Extensões aceitas
$extensoes = array(".doc", ".txt", ".pdf", ".docx", ".JPG",".png", ".Pdf",".PNG");
// Caminho para onde o arquivo será enviado
$caminho = "Documento/";
// Substituir arquivo já existente (true = sim; false = nao)
$substituir = false;
 
for ($i = 0; $i < $numeroCampos; $i++) {
	
	// Informações do arquivo enviado
	$nomeArquivo = $_FILES["arquivo"]["name"][$i];
	$tamanhoArquivo = $_FILES["arquivo"]["size"][$i];
	$nomeTemporario = $_FILES["arquivo"]["tmp_name"][$i];
	
	// Verifica se o arquivo foi colocado no campo
	if (!empty($nomeArquivo)) {
	
		$erro = false;
	
		// Verifica se o tamanho do arquivo é maior que o permitido
		if ($tamanhoArquivo > $tamanhoMaximo) {
			$erro = "O arquivo " . $nomeArquivo . " não deve ultrapassar " . $tamanhoMaximo. " bytes";
		} 
		// Verifica se a extensão está entre as aceitas
		elseif (!in_array(strrchr($nomeArquivo, "."), $extensoes)) {
			$erro = "A extensão do arquivo <b>" . $nomeArquivo . "</b> não é válida";
		} 
		// Verifica se o arquivo existe e se é para substituir
		elseif (file_exists($caminho . $nomeArquivo) and !$substituir) {
			$erro = "O arquivo <b>" . $nomeArquivo . "</b> já existe";
		}
	
		// Se não houver erro
		if (!$erro) {
			
// Move o arquivo para o caminho definido
                   
                    $user = $_SESSION['usuario'];
                    $id = $_SESSION['cod'];
			move_uploaded_file($nomeTemporario, ($caminho . $nomeArquivo));
			//conecta ao banco de dados
                        $arquivo = ($caminho . $nomeArquivo);
                        
                        $dbc= mysqli_connect('107.180.46.155', 'DocLab', '33622905', 'DocumentosLab');
                        $perfil = "SELECT id_users FROM users WHERE nome='$user'"; 
                        $id = mysqli_query($dbc, $perfil);
                        $row= mysqli_fetch_array($id);
                        $teste = date('d/m/y');
                        $resultado = $row['id_users'];
                         // echo '<pre>'; var_dump($_SESSION); die();
                        //salva o caminho no banco de dados
                        $query ="insert into upload(arquivo,data,documento_id_documento,users_id_users,situacao_ID_SITUACAO) values('$nomeArquivo','$teste','$id','$resultado',3);";
                       $data= mysqli_query($dbc, $query);
                        $_SESSION['up'] = "Upload dos arquivos efetuados com sucesso!";
                        // Mensagem de sucesso
                        header("Location: /Doc/MenuFuncionario.php");
 
exit;
		
		} 
		// Se houver erro
		else {
			// Mensagem de erro
	//		$_SESSION['up'] = "Upload dos arquivos efetuados com erro!";
                       // header("Location: /Doc/UploadArquivos.php");
                    echo "deu ruim";
		}
	}
}
