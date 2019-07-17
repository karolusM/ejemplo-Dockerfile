<?php
    $ip = $_SERVER['SERVER_ADDR'];
?>
<html>
	<head>
		<title>Ejemplo base <?= $ip ?></title>		
	</head>
	<body>
		<?php
		echo "Hola!<br><br>Hoy es: ".date("d/m/Y h:i");
		echo "<br>";
		echo "Server IP: $ip<br>";
		echo "<br>Headers<br><br>";

		foreach (getallheaders() as $nombre => $valor) {
			echo "$nombre: $valor<br>";
		}			
		?>
		<h2>Se acabó...</h2>
	</body>
</html>




	
