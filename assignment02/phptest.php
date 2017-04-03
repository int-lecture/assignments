<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
 <?php echo '<p>Hallo Welt</p>'; ?>

	<h1>Bitte geben Sie Ihren Namen ein!</h1>

	<form method="post" action="phptest.php">
	<input type="text" name="username">
	<input type="submit">
	</form>


	<?php
	
	$spielerliste = "Reus, Müller, Neuer";
	
	$spieler = explode(",", $spielerliste);

	foreach ($spieler as $x) {
	      echo $x;
	   }
	   
     echo "<h1>Hallo " . $_POST["username"] . "</h1>";

	// Öffnet die Textdatei
	
	$f = fopen("textfile.txt", "a");
	fwrite($f, "PHP macht ".$_POST["username"]." Spaß! - "); 

	fclose($f);

	


	$f = fopen("textfile.txt", "r");
	echo fgets($f);
	
    
	fclose($f);

		
	?>
	
	
 </body>
</html>
