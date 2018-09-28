<?php
	$con = @mysql_connect ('localhost', 'root', '') or die (mysql_error());
	$xl= mysql_select_db ('chat', $con) or die (mysql_error());
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Chat</title>
	<link rel="stylesheet" href="estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
	<script>
		function nova(){
			setTimeout("window.location='chat.php'", 10);
		}
	</script>
</head>
<body>
	<div id="conteudo">
		<div id="caixa-chat">
			<h1>Meu Chat</h1>
			<div id="chat">
				<?php
					$np= mysql_query ("SELECT * FROM mensagens");
					while($ln= @mysql_fetch_array($np)):
				?>
				<div id="dados-chat">
					<span style="color: #ff9004;"><?php
			echo $_SESSION['usuarioUsuario'];
				?> </span>
					<span style="color: #848484;"><?php echo $ln['mensagem']; ?> </span>
					<span style="float: right;"><?php $hora=date("H"); $hc= $hora-3; $min=date("i");
					echo $hc.":".$min;?></span>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
		<form method="POST" action="enviar.php">
			<h2><?php
			echo $_SESSION['usuarioUsuario'];
				?></h2>
			<textarea name="mensagem" placeholder="Digite uma mensagem"></textarea>
			<button name="enviar" onclick= "nova()"><img src="enviar.png" style="width: 50%; height: 80%;"></button>
		</form>
	</div>
</body>
</html>
