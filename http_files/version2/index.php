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
				include("show_output.php");
				break;	
			case 5:
				include("show_input.php");
				break;	
			case 6:
				include("show_limits.php");
				break;	
			case 7:
				include("update.php");
				break;
			case 8:
				include("update.exec.php");
				break;	
			case 9:
				include("get_inputs.php");
				break;					
			case 99:
				include("error.php");
				break;					
			default:
				include("error.php");
				break;
			}
		
		
		
		
		
		
	} else {
		//re-direct to error page
		header("location: ?p=7");
		exit();
	}




?>