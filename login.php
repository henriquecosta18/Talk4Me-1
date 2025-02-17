<!DOCTYPE html>
<html>
	<head>		
		<title> Login </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="grid.css">
		<link rel="stylesheet" href="grid.css">
		<link rel="stylesheet" href="grid.css">
		<style type="text/css">
			body {
				font-family:Arial, sans-serif;
			}

			img {
				-moz-transform: all 0.4s;
				-webkit-transform: all 0.4s;
				transition: all 0.4s;
			}

			img:hover {
				-moz-transform: scale(0.1);
				-webkit-transform: scale(0.1);
				transform: scale(0.9);
			}

			/* Cabeçalho */
			.cabeçalho {
				width: 100%;
				padding: 10px;
				background: #ECECEC;
				box-shadow: 0 0 8px rgba(0,0,0,0.2);
				top: 0;
				z-index: 99;
				position: fixed;
			    display: table-cell;
			    text-align: center;
			}

			.icones {
				float: right;
				margin-top: 40px;
				margin-right: 20px;
			}

			li {
				display: inline-flex;
				float: left;
			}			

			input.botao { /* Botão do cardapio */
				background-color: #C56B34;
	       		border: 1px solid transparent;
        		color: #fff;
          		border-radius: 20px;
          		height: 30px;
          		width: 70px;	      
			}

			.botao:hover {
			    transition: 0.5s all;
			    box-shadow: 1px 1px 10px 1px black;				
			}					
			
			/* Rodapé */
			.rodape {
				width: 100%;
				padding: 10px;
				background: #ECECEC;
				box-shadow: 0 0 8px rgba(0,0,0,0.2);
				display: flex;
				justify-content: space-around;				
			}			

			img.whatsapp {
			    display: flex;
			}

			table.tel { 
				border: 2px solid transparent;
			    display: flex;			
			}

			/* Direitos */
			.direitos {
				text-align: center;
				background: #ECECEC;
				width: 100%;
				padding: 10px;				
			}

			/* Cadastro */
			*{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			.fundo {
				display: flex;
				justify-content: center;
				align-items: center;
				margin-top: 100px;				
			}

			h2 {
				font-size: 30px;
			}

			.container {
				width: 350px;
				padding: 50px 20px;
				margin-bottom: 100px;
				margin-top: 100px;
			
			}

			.campos {
				width: 100%;
				height: 46px;
				margin-top: 25px;
				background: transparent;
				border: none;
				outline: none;
				border-bottom: 1px solid;
				transition: .25s ease-in-out;
			}

			.input-field {
				position: relative;
				margin-bottom: 20px;
			}

			label {
				position: absolute;
				top: 0;
				left: 0;
				transform: translateY(40px);
				transition: .25s ease-in-out;
			}

			.campo:focus{
				border-bottom: 2px solid;
				box-shadow: 0 1px 0 0;
			}

			.campos:focus + label {
				transform: translateY(14px);
				font-weight: bold;
			}

			.campos:not(:placeholder-shown) + label {
				transform: translateY(14px);
				font-weight: bold;
			}

			.campos:not(:placeholder-shown) {
				border-bottom: 1px solid;
				box-shadow: 0 1px 0 0;
			}

			.campos::placeholder{
				color: transparent;
			}

			.bt_login {
				padding: 10px 30px;
				margin: 5px;
				background: #C56B34;
	       		border: 2px solid transparent;
	       		border-radius: 20px;
        		color: #fff;
        		transition: all 0.4s;	
			}

			.bt_login:hover {
				transform: scale(0.9);
			}

			.botao_login {
				text-align: center;
			}

			.esqueceu_senha {
				text-decoration: none;
				padding: 10px;
				font-family: arial;
				color: black;
			}	

		</style>
	</head>

	<body>
		<header class="cabeçalho"> <!--cabeçalho-->
			<a href="Pagina_inicial.html"> <img class="Logo" src="Rodapé_Cabeçalho/Logo.png" height="110" width="230"> </a>

			<div class="icones">
				<ul>
					<li>
						<form action="Cardapio.html">
							<input class="botao" type="submit" value="Cardápio">
						</form>
					</li>

					<li class="carrinho">
						<a href="carrinho.php"> <img src="Rodapé_Cabeçalho/carrinho.png" height="28" width="28"> </a>
					</li>
				</ul>
			</div>
		</header>

		<div class="fundo">
			<div class="container">
				<h2> Login </h2>
				<form action="logar.php" method="POST">
					<div class="input-field">
						<input class="campos" type="text" name="email" placeholder="Digite seu e-mail"required>
						<label for="e-mail"> E-mail </label>
					</div>

					<div class="input-field">
						<input class="campos" type="password" name="senha" placeholder="Digite sua senha"required>
						<label for="senha"> Senha </label>
					</div>

					<div class="botao_login">
						<input class="bt_login" type="submit" value="Confirmar">
					</div>
				</form>

				<div class="linhas">
					<a class="esqueceu_senha" href="Redefinir_senha.html"><p><b> Esqueceu sua senha? </b></p></a>
					<a class="esqueceu_senha" href="cadastro.html"><p><b> Ainda não tem login? </b></p></a>
				</div>
	
			</div>
		</div>

		<footer class="rodape"> <!-- rodapé -->
			<article>
				<b> Localização: </b>
				<br>
				Ponto Pinheiros - Próximo ao metrô Pinheiros
				<br>
				R. Cunha Gago, 590
				<br><br>
				<b> Horários de Funcionamento: </b>
				<br>
				Horário de Almoço:
				<br>
				Terça à Sexta das 12h às 14h30.
				<br>
				Sábados e Domingos das 13h às 16h.
				<br><br>
				Horário de Janta:
				<br>
				Terça à Sexta das 18h30 às 21h30
				<br>
				Sábados e Domingos das 18h30 às 21h30										
			</article>

			<article>
				<img class="whatsapp" src="Rodapé_Cabeçalho/whatsapp.png" height="36" width="38" align="left">
				<table class="tel">
					<tr>  </tr>
					<td> (11) 96528-9741 </td>
				</table>
				<br>
				Tem alguma sugestão? Quer mandar seu
				currículo?<br>
				Envie para: ponto@pontodatapioca.com
				<br><br>
				Quer o Ponto da Tapioca no seu evento?
				<br>
				Escreve pra nós, em<br>
				eventos@pontodatapioca.com
			</article>	
		</footer>

		<article class="direitos">
			<p> © copyright Ponto da Tapioca - all rights reserved - since 2021 </p>	
		</article>
					
	</body>
</html>