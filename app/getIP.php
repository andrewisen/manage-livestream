<?php
	// Strip slashes before putting the form data into target file
	$cd = stripslashes($_POST['code']);

	// Show the mess, if the code string is empty
	if (empty($cd))
	    echo "Empty";
	else
	{
	    $file = fopen("ip.txt", "w");
	    fwrite($file, $cd);
	    fclose($file);
	}

	// Redirects
	header('Location:index.php');
?>