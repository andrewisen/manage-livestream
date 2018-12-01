<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>live.andrewisen.se</title>
	</head>

	<body>
		<br>
		<?php


			$msgA = "IP: ";
			$msgB = "Stream: rtmp://";
			$msgC = "/live/test";

			$IP = fopen("text.txt", "r");
			$IPaddr = fgets($IP);
			$IPaddrXSS = htmlspecialchars($IPaddr, ENT_QUOTES);

			// Read line from the text file and write the contents to the client
			echo $msgA.$IPaddrXSS."<br>";
			echo $msgB.$IPaddrXSS.$msgC;

			fclose($IP);

		?>

		<br>
		<br>
		<!--<form action="writeIP.php"method="post">
		<textarea name="code">Din IP</textarea>
		<br>
		<input type="submit"value="Uppdatera IP">
		</form>-->

		<form action="/getIP.php" method="post">
		Nytt IP: <input type="text" name="code" placeholder="192.168.0.1"> <input type="submit" value="Submit">
		</form>

	</body>

</html>