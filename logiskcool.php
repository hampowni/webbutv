<?php


	function fact($number)
	{
		//base
		if ($number == 0;)
		{
			return 1;
		}
		//call
		else
		{
			return ($number * fact($number-1));
		}
		
		
	}

	echo fact($number);

	



?>