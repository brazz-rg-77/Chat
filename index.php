<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Chat</title>
	<link rel="shortcut icon" href="imagens/favicon.png"/>
	<link rel = "stylesheet" href = "login.css"/>
	<script src= "js/expandir.js"></script>
</head>
<body>
	<header class="cabecalho-login">
	<div class="cabecalho-limite">


		<h1><a href="#">OranGGe</a></h1>

		<ul>
			<li><button id="login" onclick="document.getElementById('id02').style.display='block'">Login</button></li>
			<li><button id="login" onclick="document.getElementById('id01').style.display='block'">Cadastre-se</button></li>
		</ul>

	</div>

</header>

		
<div id="id01" class="modal">
  
  <form method="POST" action="processa.php" class="modal-content animate">
   
       <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" >&times;</span>
    </div>
    <div class="container">
      <h1>Cadastro</h1>
      <hr>
      <p><label for="usuario">Usuário</label></br>
      <input type="text" placeholder="Digite um usuário" name="usuario" id="usuario" required></p>
	  
	   <p><label for="email">Email</label></br>
      <input type="text" placeholder="Digite seu Email" name="email" id="email" required></p>

      <p><label for="senha">Senha</label></br>
      <input type="password" placeholder="Digite uma senha" name="senha" id="senha" required></p>

      <p><label for="senha2">Repita a senha</label></br>
      <input type="password" placeholder="Repita a senha" name="senha2" id="senha2" required></p>
      
      <p><label> <input type="checkbox" checked="checked" id="remember" style="margin-bottom:15px"> Lembrar de mim </label></p>
      <div class="clearfix">
		 <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button> 
        <input type="submit" class="signupbtn" value="Cadastrar">
		
      </div>
    </div>

  </form>
</div>
<div id="id02" class="modal">
	 <form method="POST" id="fLogin" action="valida.php" class="modal-content animate">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" >&times;</span>
		</div>
		<div class="container">
			<h1>Login</h1>
			<hr>
		
		<p><label for="matricula">Usuário:</label></br>
		<input type="text" name="usuario" id= "matricula" size="20" maxlength="30" placeholder="Seu Usuário" required /></p>
		<p><label for="senha">Senha:</label></br>
		<input type="password" name="senha" id= "senha" size="8" maxlength="8" placeholder="8 dígitos" required /></p>
		<p><label> <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Lembrar de mim </label></p>
		<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancelar</button>
		<input type="submit" name="nBotaoEntrar" value= "Entrar">
		
		
		
	 </form>
</div>
</body>
</html>