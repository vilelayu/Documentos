<?php
session_start();
?>
<!DOCTYPE html>
<html class="ls-theme-orange">
  <head>
    <title>Página com a estrutura inicial</title>

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
      <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
      <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
      <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
    </div>

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
        <span class="ls-name"><?php echo $_SESSION['usuario'];?></span>
    
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

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
      <a href="MenuFuncionario.php"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <nav class="ls-menu">
        <ul>
           <li><a href="/locawebstyle/documentacao/exemplos/painel1/home" class="ls-ico-upload" title="Formulario de Upload">Formulário de Upload</a></li>
           <li>
            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
            <ul>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain" class=> Contate o RH </a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email"> - </a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect"> - </a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-answer"> - </a></li>
              <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-api"> - </a></li>
            </ul>
          </li>
        </ul>
      </nav>


  </div>
</aside>

<!-- Formulário Completo contendo os campos -->

    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-text">Formulário</h1>
        <form   method="post" action="CadastroManual.php" class="ls-form ls-form-horizontal row">
  <fieldset>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Nome Completo</b>
      <input type="text" name="Nome" placeholder="Insira o seu nome Completo" class="ls-field" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Carteira de trabalho</b>
      <input type="text" name="Carteira" placeholder="Digite o número da Carteira de trabalho" class="ls-field" required>
    </label>  <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Certidão de Nascimento ou Casamento</b>
      <input type="text" name="Certidão" placeholder="Insira a certidão" class="ls-field" required>
    </label>
<label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Escolaridade</b>
      <input type="text" name="certificado" placeholder="Insira seu certificado" class="ls-field" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">RG</b>
      <input type="text" name="RH" placeholder="Insira o número do seu RG/CNH" class="ls-field" required>
    </label>  <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Número do PIS/PASEP</b>
      <input type="text" name="PIS" placeholder="Insira o número do seu PIS/PASEP" class="ls-field" required>
    </label>
<label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Certificado de Reservista</b>
      <input type="text" name="crm" placeholder="Insira seu Certificado de Reservista" class="ls-field" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Título de Eleitor</b>
      <input type="text" name="titulo" placeholder="Insira o numero do Título" class="ls-field" required>
    </label>  <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Conta Bancária</b>
      <input type="text" name="conta" placeholder="Insira o numero da sua conta" class="ls-field" required>
    </label>
<label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">CPF</b>
      <input type="text" name="cpf" placeholder="Insira o número do seu CPF" class="ls-field" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Data de Nascimento</b>
      <input type="text" name="Data" placeholder="Insira sua data de Nascimento" class="ls-field" required>
    </label>  <label class="ls-label col-md-4 col-xs-12">
    </label>
<label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Endereço Completo</b>
      <input type="text" name="Endereço" placeholder="Insira seu Endereço Completo" class="ls-field" required>
    </label>
    <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Cargo</b>
      <input type="text" name="Cargo" placeholder="Insira seu Cargo" class="ls-field" required>
    </label>  <label class="ls-label col-md-4 col-xs-12">
      <b class="ls-label-text">Currículo Lattes</b>
      <input type="text" name="Currículo" placeholder="Insira o link do seu Currículo Lattes" class="ls-field" required>
    </label>
    
    	
<!-- Botão de Salvar -->
	
  </fieldset>

        <input class="ls-btn-primary ls-ico-bukets" id="btnenviar" name="btnenviar" type="submit" value="  Salvar  " />
	</form>
  
  <hr>
<!-- Fim do botão de Salvar -->      	
		
<!-- Fim do Formulário -->	
		
      </div>
    </main>

    <aside class="ls-notification">
      <nav class="ls-notification-list" id="ls-notification-curtain" style="left: 1716px;">
        <h3 class="ls-title-2">Notificações</h3>
        <ul>
          <li class="ls-dismissable">
            <a href="#"> Documento Pendente </a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Documentação aprovada </a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Ops, houve um erro em sua documentação </a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">-</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">-</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
        </ul>
      </nav>

      <nav class="ls-notification-list" id="ls-help-curtain" style="left: 1756px;">
        <h3 class="ls-title-2">Atualizações</h3>
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