<?php
session_start();
$user_name = $_SESSION['usuario'];
$idUser = $_SESSION['iduse'];
$dbc=  mysqli_connect('107.180.46.155', 'DocLab', '33622905', 'DocumentosLab');
$sobAnalise = ("SELECT * FROM documento ;");
$dados = mysqli_query( $dbc,$sobAnalise) ;
//$total = mysqli_num_rows($dados);

?>
<!DOCTYPE html>
<html lang="pt-br" class="ls-theme-orange ls-html-nobg ls-main-full">

<head>
  <title>Historico de documentos recebidos</title>
 <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_client documentacao_exemplos_painel1_client_index">

  <div class="ls-topbar ">

  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">

    <!-- Links de apoio -->
    <div class="ls-alerts-list">
    
<a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>    </div>

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
        <span class="ls-name"><?php echo  $_SESSION['usuario']; ?></span>
        
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>
  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="/locawebstyle/documentacao/exemplos/painel1/pre-painel"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

  <!-- Nome do produto/marca com sidebar -->
  <h1 class="ls-brand-name">
      <a href="MenuFuncionario.php" class="ls-ico-multibuckets">
        <small>Faculdade Pitágoras - Contagem</small>
        Sistema de Documentações
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>


    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">
      <a href="/locawebstyle/documentacao/exemplos/painel1/pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <nav class="ls-menu">
        <ul>
           <li><a href="/locawebstyle/documentacao/exemplos/painel1/home" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
           <li><a href="/locawebstyle/documentacao/exemplos/painel1/clients" class="ls-ico-users" title="Clientes">Clientes</a></li>
           <li><a href="/locawebstyle/documentacao/exemplos/painel1/stats" class="ls-ico-stats" title="Relatórios da revenda">Relatórios da revenda</a></li>
           <li>
            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
            <ul>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain">Domínios da Revenda</a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">E-mail de Remetente</a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Aparência</a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-answer">Atendimento</a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-api">Chave de acesso para API</a></li>
            </ul>
          </li>
        </ul>
      </nav>


  </div>
</aside>



  <main class="ls-main ">
    <div class="container-fluid">
      <h1 class="ls-title-intro ls-ico-docs">Relação de documentos solicitados </h1>

<div >
<table class="ls-table  ls-table ls-table-striped ls-bg-header">
  <thead>
    <tr>
        <th>Id</th>
      <th>Documento</th>
      <th class="hidden-xs">Ação</th>
    </tr>
  </thead>
  <?php
  while ($analise = mysqli_fetch_array($dados) ){
 echo" <tbody>
    <tr>
   <form action='deletaDoc.php' method='post'>
            <td><input type='hidden' id='id' name='codigo' value ='".$analise['id_documento']."'/>".$analise['id_documento']."</td>
            <td>".$analise['tipo']."</td>
            
<td class='hidden-xs'><input title='Remover este documento' class='ls-btn   id='btnapaga'  type='submit' value='Remover'/></td>
</form>
    </tr>            

    </tbody>";
  }?>
 
    
</table>
    <div class="domain-actions ls-display-none">
      <button type="submit" class="ls-btn-primary">Salvar</button>
      <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
    </div>
  </form>
</div>


    </div>


  </main>


  <aside class="ls-notification">
    <nav class="ls-notification-list" id="ls-notification-curtain">
      <h3 class="ls-title-2">Notificações</h3>
      <ul>
          <li class="ls-dismissable">
            <a href="#">Corrupti et velit odit labore expedita culpa earum temporibus dolorem voluptatibus quo</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Molestiae est et eius nulla alias architecto temporibus voluptatem earum veniam aut</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Modi voluptas excepturi quae voluptatem magni vel ut corporis aut</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Vel quidem ab et eos nostrum est alias iure consequatur et veritatis reiciendis omnis et</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Dolor suscipit sit aut facere</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
      </ul>
      <p class="ls-no-notification-message">Não há notificações.</p>
    </nav>
    <nav class="ls-notification-list" id="ls-help-curtain">
      <h3 class="ls-title-2">Feedback</h3>
      <ul>
          <li><a href="#">> provident nobis numquam aut officia earum</a></li>
          <li><a href="#">> sit nesciunt dolor laboriosam error quo</a></li>
      </ul>
    </nav>
    <nav class="ls-notification-list" id="ls-feedback-curtain">
      <h3 class="ls-title-2">Ajuda</h3>
      <ul>
        <li class="ls-txt-center hidden-xs">
          <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
        </li>
        <li><a href="#">> Guia</a></li>
        <li><a href="#">> Wiki</a></li>
      </ul>
    </nav>
  </aside>

  <script src="../../../../assets/javascripts/libs/jquery-2.1.0.min.js" type="text/javascript"></script><script src="../../../../assets/javascripts/example.js" type="text/javascript"></script><script src="../../../../assets/javascripts/locastyle.js" type="text/javascript"></script><script src="//code.highcharts.com/highcharts.js" type="text/javascript"></script><script src="../../../../assets/javascripts/docs/panel-charts.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(window).on('load', function() {
      locastyle.browserUnsupportedBar.init();
    });
  </script>

</body>
</html>
