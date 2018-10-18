<?php
session_start();
$funcionario = $_SESSION['funcionario'];
$dbc=  mysqli_connect('107.180.46.155', 'DocLab', '33622905', 'DocumentosLab');
$busqueId = ("SELECT id_users FROM users where nome = '$funcionario' ;");
$dado = mysqli_query( $dbc,$busqueId) ;

$sobAnalise = ("SELECT * FROM upload INNER JOIN documento ON upload.documento_id_documento = documento.id_documento INNER JOIN situacao ON  situacao_ID_SITUACAO  = situacao.ID_SITUACAO ;");
$dados = mysqli_query( $dbc,$sobAnalise) ;
$total = mysqli_num_rows($dados);
?>
<!DOCTYPE html>
<html class="ls-theme-orange">
  <head>
    <title>Painel de acompanhamento</title>

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
          <li><a href="#">Meus dados</a></li>
          <li><a href="#">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-next"><span class="ls-text">Documentos Recebidos</span></a>

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
 <li><a href="/locawebstyle/documentacao/exemplos/painel1/clients" class="ls-ico-circle-left" title="Painel Principal">Funcionários</a></li>
  </div>
</aside>
      <form method="post" action="atualizaStatus.php" class="ls-form row">    
      <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-folder-open">Documentos Recebidos de <?php echo $_SESSION['funcionario'];?> </h1>
<?php
while ($analise = mysqli_fetch_array($dados)) {
                 
          echo"
        <div class='ls-list'>
  <header class='ls-list-header'>
    <div class='ls-list-title col-md-9'>
      <strong><input type='hidden' id='id' name='codigo' value ='".$analise['id_upload']."'/>".$analise['tipo']."</strong>
      <small>Verifique o documento e indique seu Status</small>
    </div>
       
    <fieldset>
    <!-- Exemplo com Radio button -->
    <div class='ls-label col-md-5'>
      <p>Escolha um status:</p>
      <label class='ls-label-text'>
        <input type='radio' name='status' value='1'>
        Aprovado
      </label>
       <label class='ls-label-text'>
        <input type='radio' name='status' value='4'>
        Erro
      </label>
     </div>
  </fieldset>
  </header></div>" ;
      }  
    ?>
        <div class="ls-actions-btn">
    <button class="ls-btn">Salvar</button>
    <button class="ls-btn-danger">Excluir</button>
  </div>
 </form>       
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