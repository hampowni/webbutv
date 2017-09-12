<?php
//associative arrays
var_dump($_GET);



if(isset($_GET['mes']) && $_GET['mes']!=null )
{
	
	$get = $_GET['mes'];

	}

else
{
	// echo "no get";
	
}
function checkGetPost($arr)
{
	$returnArr = array();
	foreach($arr as $key => $value)
	{
		if( isset($value) && $value!=null )
		{
			
			$returnArr[$key] = $value;
		}
		else
		{
			
		}
	}
	return $returnArr;
}
	



?>


<a href = "get.php?mes=hello&mes2=56">Klick</a>