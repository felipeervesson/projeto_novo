<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
<title>Exemplo Estrutura de Site Tableless</title>

<link rel="stylesheet" type="text/css" href="estilo.css" />
<script language="javascript" src="script.js"></script>

</head>

<body>

<div id="todo">
	<div id="topo">
		<div id="logo">Logo</div>

		<p>Masters Infor</p>Grafica e Solucoes em Informatica
	</div>

	<div id="meio">
		<div id="esquerda">
			<div id="menu">
                            <div class="itemMenu"><a href="">Principal</a></div>
				<div class="itemMenu"><a href="">Empresa</a></div>
				<div class="itemMenu"><a href="">Produtos</a></div>
				<div class="itemMenu"><a href="">Serviços</a></div>
				<div class="itemMenu"><a href="">Contato</a></div>
			</div>
		</div>

		<div id="miolo">
			<div class="secao_miolo">Seção 1</div>
		</div>

		<div id="direita">
                 <div class="secao_direita">
                     <form action="processa.php" method="post"> 
                        Nome<input type="text" name="user">
                     <br>
                        Senha<input type="text" name="pass">
                     <br>
                     <input type="submit" value="Login">
                                </form>
                        Casso Nao tenha Cadastro
                
                
                </div>
                        <div class="secao_direita">Secao 2</div>
		</div>
		<div style="clear: both;"></div>
	</div>
	<div id="rodape">
		<div id="rodape_direita">
			Rua Candido Martins dos Santos - N°603<br/>
			Parnamirim - RN - CEP: 59150-000<br/>
			Email: <a href="MastersInfor:suportemi@live.com">suportemi@live.com</a>
		</div>
	</div>
</div>

</body>
</html>