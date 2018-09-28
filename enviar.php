<?php
	$con = @mysql_connect ('localhost', 'root', '') or die (mysql_error());
	$xl= mysql_select_db ('chat', $con) or die (mysql_error());
?>

<?php
	
	$mensagem= $_POST ['mensagem'];
	
	$sql = mysql_query("INSERT INTO mensagens(mensagem) VALUES ('$mensagem')") or die (mysql_error()); 

?>