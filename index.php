<?php
	// Force no cache - server side

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Manage Livestream</title>
	</head>

	<body>
		<br>
		<?php
			// Message B, and Message C concatenates into the full URL
			// E.g. Stream: rtmp://192.168.0.1/live/test

			$msgA = "IP: ";
			$msgB = "Stream: rtmp://";
			$msgC = "/live/test";

			// The IP Address is located (in plain text) in the file "ip.txt"

			$IP = fopen("ip.txt", "r");
			$IPaddr = fgets($IP);
			$IPaddrXSS = htmlspecialchars($IPaddr, ENT_QUOTES);

			// Reads line from the text file and write the contents to the client
			echo $msgA.$IPaddrXSS."<br>";
			echo $msgB.$IPaddrXSS.$msgC;

			fclose($IP);
		?>

		<br>
		<br>

		<form action="./getIP.php" method="post">
		Nytt IP: <input type="text" name="code" placeholder="192.168.0.1"> <input type="submit" value="Submit">
		</form>

	</body>

</html>