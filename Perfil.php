<?php
session_start();
$user_name = $_SESSION['usuario'];
$idUser = $_SESSION['iduse'];
$dbc= mysqli_connect('localhost',  'DocLab', '33622905', 'DocumentosLab');
$sobAnalise = ("SELECT * FROM perfil where IdUser = '$idUser';");
$dados = mysqli_query( $dbc,$sobAnalise) ;
$total = mysqli_num_rows($dados);
$analise = mysqli_fetch_array($dados);
?>
<!DOCTYPE html>
<html lang="pt-br" class="ls-theme-orange ls-html-nobg ls-main-full">

<head>
  <title>Fake Product Name</title>
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
      <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
      <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
    </div>

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
      <h1 class="ls-title-intro ls-ico-users">Dados do Usuário</h1>

<div class="ls-box">


  <form action="" class="ls-form ls-form-horizontal ls-form-text" data-ls-module="form">
    <fieldset id="domain-form" class=" ls-form-horizontal">
  
                 
        
        <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Nome Completo:</b>
        <input type='text' value=<?php echo $analise['Nome']?> required>
      </label>  
        <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Data de Nascimento:</b>
        <input type='text' value=<?php echo $analise['DataNascimento']?> required>
      </label> 
            <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Carteira de trabalho:</b>
        <input type='text' value=<?php echo $analise['CarteiraTrabalho']?> required>
      </label> 
        <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Certidão de Nascimento:</b>
        <input type='text' value=<?php echo $analise['CertidaoNascimento']?> required>
      </label>  
            <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Escolaridade:</b>
        <input type='text' value=<?php echo $analise['Escolaridade']?> required>
      </label> 
        <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Identidade:</b>
        <input type='text' value=<?php echo $analise['identidade']?>required>
      </label>  
            <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Número do PIS/PASEP:</b>
        <input type='text' value=<?php echo $analise['pisPasep']?> required>
      </label> 
        <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Certificado de Reservista:</b>
        <input type='text' value=<?php echo $analise['CRM']?> required>
      </label>  
            <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Título de Eleitor:</b>
        <input type='text' value=<?php echo $analise['TituloEleitor']?> required>
      </label> 
        <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Conta Bancária:</b>
        <input type='text' value=<?php echo $analise['conta']?> required>
      </label>  
            <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>CPF:</b>
        <input type='text' value=<?php echo $analise['CPF']?> required>
      </label> 
        
            <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Cargo:</b>
        <input type='text' value=<?php echo $analise['Cargo']?> required>
     </label> 
         
       
        <label class='ls-label col-md-6 col-lg-8'>
        <b class='ls-label-text'>Currículo Lattes:</b>
        <input type='text' value=<?php echo $analise['lattes']?> required>
      </label>  
       
    
       
    
    
    
    
    
    
    </fieldset>
    <div class="domain-actions ls-display-none">
      <button type="submit" class="ls-btn-primary">Salvar</button>
      <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
    </div>
  </form>
</div>








<!-- Modal Adicionar envios -->
<div class="ls-modal" id="addMessage">
  <form action="" class="ls-form">
    <div class="ls-modal-box">
      <div class="ls-modal-header">
        <button data-dismiss="modal">×</button>
        <h4 class="ls-modal-title">Adicionar envios avulsos</h4>
      </div>
      <div class="ls-modal-body ls-form-inline">
        <p>Os envios avulsos terão o mesmo prazo de expiração que os envios normais cadastrados para esse cliente. 07/05/2014</p>
        <p>
          <strong>Saldo disponível da sua revenda</strong>
          <span>889.239</span>
        </p>
        <hr>
        <label class="ls-label">
          <b class="ls-label-text">Quantidade de envios avulsos a adicionar</b>
          <input type="number" name="" required>
        </label>
      </div>
      <div class="ls-modal-footer">
        <button type="submit" class="ls-btn-primary">Adicionar</button>
        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </form>
</div>

<!-- Modal Remover envios -->
<div class="ls-modal" id="removeMessage">
  <form action="" class="ls-form">
    <div class="ls-modal-box">
      <div class="ls-modal-header">
        <button data-dismiss="modal">×</button>
        <h4 class="ls-modal-title">Remover envios</h4>
      </div>
      <div class="ls-modal-body">
        <p>Os envios serão removidos automaticamente após esta ação.</p>

        <label class="ls-label">
          <b class="ls-label-text">Saldo disponível do cliente</b>
          <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
        </label>


        <label class="ls-label">
          <b class="ls-label-text">Disponível para remoção até 27/04/2014</b>
          <input type="number" disabled="disabled" readonly="readonly" name="" value="8" >
        </label>


        <label class="ls-label">
          <b class="ls-label-text">Quantidade de envios a remover</b>
          <input type="number" name="" required>
        </label>

      </div>
      <div class="ls-modal-footer">
        <button type="submit" class="ls-btn-primary">Remover</button>
        <a class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</a>
      </div>
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
