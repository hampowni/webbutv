<?php
	
	
	
	$fileName = "users.txt";
	
	$myFile = fopen($fileName, "a") or die("Unable to open");
	
	$txt = "";
	
	foreach( $_POST as $key => $value)
	{
		
		
		$txt = $txt.$key.": ".$value."\t";		
		
		
	}
	

	fwrite($myFile, "\n". $txt);
	fclose($myFile);




	header("Location:form.html?mes=success");


?>