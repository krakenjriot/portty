<?php
	include_once("functions.php");

	if(isset($_GET['p'])){				
	
		$p = $_GET['p'];
		
		switch ($p) 
			{
			case 0:
				include("api.php");
				break;
			case 1:
				include("index0.php");
				break;
			case 2:
				include("switches.php");
				break;
			case 3:
				include("show_config.php");
				break;
			case 4:
				include("output.php");
				break;	
			case 5:
				include("input.php");
				break;	
			case 6:
				include("limits.php");
				break;				
			default:
				include("error.php");
				break;
			}
		
		
		
		
		
		
	} else {
		//re-direct to error page
		header("location: ?p=3");
		exit();
	}




?>