<doctype/>

<html>
<head>
	<title>Mi pagina</title>
</head>
<body>
	<h1><?php echo 'Hola Mundo'; ?></h1>
	<?php
		for ($i=2; $i < 6; $i++) { 
			echo "<h$i>¿Cómo estás?</h$i>";
		}
		
	?>
</body>
</html>
