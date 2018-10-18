<?php
session_start();
$user_name = $_SESSION['usuario'];
$dbc= mysqli_connect('107.180.46.155', 'DocLab', '33622905', 'DocumentosLab');
$perfil = "SELECT id_users FROM users WHERE nome='$user_name'"; 
              $id = mysqli_query($dbc, $perfil);
              $row= mysqli_fetch_array($id);
              $resultado = $row['id_users'];
              
              $nivel = "SELECT nivel_idnivel FROM users WHERE id_users='$resultado'"; 
              $execult = mysqli_query($dbc, $nivel);
              $row1= mysqli_fetch_array($execult);
              $codNivel = $row1['nivel_idnivel'];
               $_SESSION['iduse'] = $resultado ;          
// cria a instrução SQL que vai selecionar os dados
          
$sobAnalise = ("SELECT tipo FROM upload INNER JOIN documento ON upload.documento_id_documento = documento.id_documento WHERE  situacao_ID_SITUACAO  = '3' AND users_id_users ='$resultado';");
$aprovado = ("SELECT tipo FROM upload INNER JOIN documento ON upload.documento_id_documento = documento.id_documento WHERE  situacao_ID_SITUACAO  = '1' AND users_id_users ='$resultado';");
$pedente = ("SELECT tipo FROM upload INNER JOIN documento ON upload.documento_id_documento = documento.id_documento WHERE  situacao_ID_SITUACAO  = '2' AND users_id_users ='$resultado' ;");
$erros = ("SELECT tipo FROM upload INNER JOIN documento ON upload.documento_id_documento = documento.id_documento WHERE  situacao_ID_SITUACAO  = '4' AND users_id_users ='$resultado' ;");


// executa a query
$dados = mysqli_query( $dbc,$sobAnalise) or die(mysql_error());
$dadosAprovado = mysqli_query( $dbc,$aprovado) or die(mysql_error());
$dadosPendente = mysqli_query( $dbc,$pedente) or die(mysql_error());
$dadosErro = mysqli_query( $dbc,$erros) or die(mysql_error());


// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
$totalAprovado = mysqli_num_rows($dadosAprovado);
$totalPendente = mysqli_num_rows($dadosPendente);
$totalErro = mysqli_num_rows($dadosErro);

?>
<!DOCTYPE html>
<html class="ls-theme-orange">
  <head>
    <title>Dashboard</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
  </head>
  <body>
    <div class="ls-topbar ">

  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">

    <!-- Links de apoio -->
    <div class="ls-alerts-list">
      <a href="#" class="ls-ico-spinner" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Atualizar Página</span></a>
      <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Atualização do Sistema</span></a>
    </div>

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
        <span class="ls-name"><?php echo $_SESSION['usuario'];?></span>
      
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
            <li><a href="Perfil.php">Meus dados</a></li>
             <li><a href="troca-senha.php">Alterar senha</a></li>
          <li><a href="Login.html">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="MenuFuncionario.php"  class="ls-go-next"><span class="ls-text">Dashboard</span></a>

  <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="home" class="ls-ico-multibuckets">
        <small>Faculdade Pitágoras - Contagem</small>
        Sistema de Documentações
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>


    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">
      <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <nav class="ls-menu">
        <ul>
            <li><a href="FichaCadastral.php" class="ls-ico-text" title="Formulário Manual">Formulário Manual</a></li>

            <li><a href="UploadArquivos.php" class="ls-ico-upload" title="Formuláro de Upload">Formulário de Upload</a></li>
            
            <li><a href="HistoricoDoc.php" class="ls-ico-origins" title="Historico documento ">Historico de Documentos</a></li>
            <?php
            
            if($codNivel == 2){
            echo' <li><a href="PainelRH.php" class="ls-ico-dashboard" title="Painel Principal">Gestão RH</a></li>';
            }
            ?>
        </ul>
  </div>

</aside>


      // Início da Dashboard // 

      <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-table-alt">Dashboard</h1> 

        <div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Status dos Documentos Enviados</h2>
    <p class="ls-float-right ls-float-none-xs ls-small-info"> Validados no dia <strong><?php echo date('d/m/y')?></strong></p>
  </header>
  <div id="sending-stats" class="row">
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Aprovados</h6>
        </div>
        <div class="ls-box-body">
            <strong><?php echo $totalAprovado;?></strong>
          <small> Clique abaixo para verificar</small>
        </div>
        <div data-ls-module="dropdown" class="ls-dropdown">
  <a href="#" class="ls-btn-primary">Documentos Aprovados</a>
  <ul class="ls-dropdown-nav">

 
    <?php
      if($totalAprovado != 0){
      while($a_Aprovado = mysqli_fetch_array($dadosAprovado)){
          echo "<li><a href='#'>".$a_Aprovado['tipo']."</a></li>";
      }
      } else {          echo '<li><a href="#"> Não Existe documento Aprovado</a></li>'; 
      }
        ?>
   
  </ul>
</div>
     <div class="ls-box-footer">
        </div>
      </div>
    </div>


    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Pendentes</h6>
        </div>
        <div class="ls-box-body">
          <strong><?php echo $totalPendente;?></strong>
          <small>Clique abaixo para verificar</small>
        </div>
        <div data-ls-module="dropdown" class="ls-dropdown">
  <a href="#" class="ls-btn-primary">Documentos Pendentes</a>
  <ul class="ls-dropdown-nav">
      <?php
      if($totalPendente != 0){
      while($a_Pedente = mysqli_fetch_array($dadosPendente)){
          echo "<li><a href='#'>".$a_Pedente['tipo']."</a></li>";
      }
      } else {          echo '<li><a href="#"> Não Existe documento Pedente</a></li>'; 
      }
        ?>   
  </ul>
</div>
        <div class="ls-box-footer">
        </div>
      </div>
    </div>


    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Sob Análise</h6>
        </div>
        <div class="ls-box-body">
          <strong><?php echo $total;?></strong>
          <small>Clique abaixo para verificar</small>
        </div>
        <div data-ls-module="dropdown" class="ls-dropdown">
          <a href="#" class="ls-btn-primary">Documentos Sob Análise</a>
  <ul class="ls-dropdown-nav">
      <?php
      if($total != 0){
          while ($analise = mysqli_fetch_array($dados)){
          echo "<li><a href='#'>".$analise['tipo']."</a></li>";
      }
      } else {          echo '<li><a href="#"> Não Existe documento Sob Análise</a></li>'; 
      }
        ?>
    </ul>
</div>

        <div class="ls-box-footer">
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Erro</h6>
        </div>
        <div class="ls-box-body">
          <strong><?php echo $totalErro;?></strong>
          <small>Clique abaixo para verificar</small>
        </div>
         <div data-ls-module="dropdown" class="ls-dropdown">
          <a href="#" class="ls-btn-primary">Documentos Aprovados</a>
  <ul class="ls-dropdown-nav">
      <?php
      if($totalErro != 0){
      while($a_Erro = mysqli_fetch_array($dadosErro)){
          echo "<li><a href='#'>".$a_Erro['tipo']."</a></li>";
      }
      } else {          echo '<li><a href="#"> Não Existe documento com Erro</a></li>'; 
      }
        ?>
  </ul>
</div>
        <div class="ls-box-footer">
          
        </div>
      </div>
    </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <nav class="ls-notification-list" id="ls-help-curtain" style="left: 1756px;">
        <h3 class="ls-title-2">Feedback</h3>
        <ul>
          <li><a href="#">&gt; quo fugiat facilis nulla perspiciatis consequatur</a></li>
          <li><a href="#">&gt; enim et labore repellat enim debitis</a></li>
        </ul>
      </nav>

      <nav class="ls-notification-list" id="ls-feedback-curtain" style="left: 1796px;">
        <h3 class="ls-title-2">Ajuda</h3>
        <ul>
          <li class="ls-txt-center hidden-xs">
            <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
          </li>
          <li><a href="#">&gt; Guia</a></li>
          <li><a href="#">&gt; Wiki</a></li>
        </ul>
      </nav>
    </aside>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>