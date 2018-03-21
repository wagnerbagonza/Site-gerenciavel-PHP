<?php 
require_once("Connections/config.php");
require_once("conectar_bd/conexao.php");
require_once("libraries/limita_palavras.php");
require_once("seguranca/autentication_footer.php");
require_once("scripts.php");
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>InfoNews</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="scripts/shadowbox/shadowbox.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="box">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=452261474849960";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<section id="header">
    
		<div id="header_logo">
        	<a href="http://www.uiltonrocha.com.br" rel="shadowbox"><img src="images/logo-infonews.png" alt="Logo Uilton Rocha" width="235"/></a>
        </div><!--HEADER LOGO-->
        
        <div id="publicidade">
        <img src="images/banner_tecnologia.jpg"/>
		</div><!--PUBLICIDADE-->
        
	</section><!--HEADER-->
    
    <nav id="menu">
    	<ul>
        <li><a href="index.php?infonews=nav/home">HOME</a></li>
        <li><img src="images/sep_menu.jpg" height="20" alt="separador de menu"/></li>
        <li><a href="index.php?infonews=nav/page&amp;pagina=sobre">SOBRE</a></li>
        <li><img src="images/sep_menu.jpg" height="20" alt="separador de menu"/></li>
        <li><a href="index.php?infonews=nav/page&amp;pagina=entretenimento">ENTRETENIMENTO</a></li>
       	<li><img src="images/sep_menu.jpg" height="20" alt="separador de menu"/></li>
        <li><a href="index.php?infonews=nav/categoria&amp;cat=produtos">PRODUTOS</a></li>
        <li><img src="images/sep_menu.jpg" height="20" alt="separador de menu"/></li>
        <li><a href="index.php?infonews=nav/contato">CONTATO</a></li>
        <li><img src="images/sep_menu.jpg" height="20" alt="separador de menu"/></li>
        </ul>
        <div id="menu_searce">
        	<form name="searce" action="index.php?infonews=nav/search" method="post">
            	<input type="text" name="pesquisa" class="inputText"/>
                <input type="submit" name="Pesquisar" value="Pesquisar" class="btnPesquisar"/>
            </form>
        </div><!--MENU SEARCE-->
        
    </nav><!--MENU-->
    
    <section id="content">
    <?php include_once("sidebars/publicidade.php");?>