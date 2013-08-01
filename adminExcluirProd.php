<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="a">Pesquisa Avancada</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="img/search.gif" class="search_bt"/>
    </div>
  </div>
  <div id="header">
    <div id="logo"> <a href=""><img src="img/footer_logo.png" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="" alt="" width="1" height="164" /></div>
      <div class="oferta">
        <div class="oferta_content"> <img src="" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title">Venda de Celulares</div> <!-- 3 linhas reservadas para as ofertas (1,2,3,4,5) -->
            <div class="oferta_text"> </div>
            <!-- bot�o de detalhes <a href="details.php" class="details"></a> </div> -->
        </div>
      </div>
      <div class="top_divider"><img src="img/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!--FIM DO BANNER-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      	<ul class="menu">
        	<li><a href="index.php" class="nav1">Home</a></li>
        	<li class="divider"></li>
        	<li><a href="contact.php" class="nav2">Contato</a></li>
        	<li class="divider"></li>
        	<li><a href="promocoes.php" class="nav3">Promocoes</a></li>
        	<li class="divider"></li>
        	<li><a href="minhaconta.php" class="nav4">Minha Conta</a></li>
        	<li class="divider"></li>
        	<li><a href="login.php" class="nav4">Entrar</a></li>
        	<li class="divider"></li>
        	<li><a href="login3.php" class="nav6">Administrador</a></li>
        	<li class="divider"></li>
        	</li>
      	</ul>
      <div class="right_menu_corner"></div>
    </div>
    <!--FIM DO MENU-->
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Contato</span> </div>
    <div class="left_content">
    	<div class="title_box">Produtos</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="">Smartphones</a></li>
    	    <li class="even"><a href="">Tablets</a></li>
        	<li class="odd"><a href="">Celulares</a></li>
    	    <li class="even"><a href="">Nextel</a></li>
        	<li class="odd"><a href="">Acess�rios</a></li>
      	</ul>
      	<div class="title_box">Fornecedores</div>
      	<ul class="left_menu">
	        <li class="odd"><a href="">Samsung</a></li>
    	    <li class="even"><a href="">Nokia</a></li>
        	<li class="odd"><a href="">LG</a></li>
	        <li class="even"><a href="">Motorola</a></li>
    	    <li class="odd"><a href="">Sony</a></li>
        	<li class="even"><a href="">Blackberry</a></li>
     	   <li class="odd"><a href="">Apple</a></li>
        	<li class="even"><a href="">HTC</a></li>
     	</ul>
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <div class="center_content">
      <div class="center_title_bar">Remover produtos-ADMIN</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <form name="excluir" method="POST" action="adminExcluirProd.php">
            <div class="form_row">
              <label class="contact"><strong>Nome :</strong></label>
              <input type="text" class="contact_input"  name="nome"/>
            </div>
            <br></br>
            <input type="submit" value="Pesquisar">
              <!--Inicio dos resultados de pesquisa-->
             <br></br>
             <label class="contact"><strong>Resultados:</strong></label>
             <br></br>
             <br></br>
            
             <table align="center" border="1" bordercolor="#000000" style="border-collapse: collapse" cellpadding="2">
          	<tr>
          		<td class="hhh" width="250px" height="20px"><label class="jjj">ID</label></td>
          		<td class="hhh" width="250px" height="20px"><label class="jjj">Nome</label></td>
          		<td class="hhh" width="250px"><label class="jjj">Excluir?</label></td>
          	</tr>
          	<tr>
          		<td><a class="ggg">3212</a></td>
				<td><label class="asd">GalaxyS4</label></td>
          		<td><label class="asd"><img src="img/button_cancel.png" alt="" width="16" height="16" /></label></td>
          </tr>
          
          </table>
           
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>     
      <br> </br>
      
      </div>
    </div>
    <!--FIM DA PARTE CENTRAL-->
    <div class="right_content">
    	<div class="title_box">Login</div>
  	    <div class="border_box">
      	<br> </br>
        <form>
		  <label for="inputEmail">E-mail</label>
 		  <input id="inputEmail" type="text" placeholder="Email..." />
  		  <label for="inputPassword">Senha</label>
  		  <input id="inputPassword" type="password" placeholder="Senha..." />
  		  <a class="ccc" href="esquecisenha.php">Esqueceu sua senha?</a>
  		  <a class="ddd" href="cadastro.php">Cadastre-se</a> 
  		  <br> </br>
  		  <label> <input type="checkbox" /> Lembrar senha </label>
  		  <button type="submit">Acessar</button>
		  <br></br>
		</form>
     	</div>
        <br> </br>
        <div class="shopping_cart">
        <div class="cart_title">Carrinho</div>
        <div class="cart_details"> X ITENS <br />
          <span class="border_cart"></span> Total: <span class="price">XXXX,XX</span> </div>
        <div class="cart_icon"><a href="" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="img/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
    </div>
    <!--FIM DO MENU DA DIREITA-->
  </div>
  <div class="footer">
    <div class="left_footer"> <img src="" alt="" width="170" height="49"/> </div>
    <div class="center_footer">Template made by CssCreme<br />
      <a href="http://csscreme.com"><img src="" alt="CssCreme" border="0" /></a><br />
      <img src="img/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="index.php">home</a> <a href="contact.php">contato</a> </div>
  </div>
</div>
<!--FIM DA PARTE DE BAIXO-->
</html>