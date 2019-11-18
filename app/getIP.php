<?php
	// strip slashes before putting the form data into target file
	$cd = stripslashes($_POST['code']);
	header('Location:index.php');

	// Show the msg, if the code string is empty
	if (empty($cd))
	    echo "Nothing to write";
	// if the code string is not empty then open the target file and put form data in it
	else
	{
	    $file = fopen("ip.txt", "w");
	    echo fwrite($file, $cd);

	    // show a success msg 
	    echo "data successfully entered";
	    fclose($file);
	}
?>