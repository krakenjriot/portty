<?php 

//$str = file_get_contents("C:\\tmp\conf\b1.output");
//$rest = substr($str, 8, 1); 

function toggle_state($x){
	
	$str = file_get_contents("C:\\tmp\conf\b1.output");
	$result = substr($str, $x, 1); 
	
	if($result == '1') return "checked";
	if($result == '0') return "";
	
}


function update_pin($p, $s)
	{
		$str = file_get_contents("C:\\tmp\conf\b1.output");
		$p0 = substr($str, 0, 1); 
		$p1 = substr($str, 1, 1); 
		$p2 = substr($str, 2, 1); 
		$p3 = substr($str, 3, 1); 
		$p4 = substr($str, 4, 1); 
		$p5 = substr($str, 5, 1); 
		$p6 = substr($str, 6, 1); 
		$p7 = substr($str, 7, 1); 
		$p8 = substr($str, 8, 1); 
		$p9 = substr($str, 9, 1); 
		$p10 = substr($str, 10, 1); 
		$p11 = substr($str, 11, 1); 
		$p12 = substr($str, 12, 1); 
		$p13 = substr($str, 13, 1); 
		$p14 = substr($str, 14, 1); 
		$p15 = substr($str, 15, 1); 
		$p16 = substr($str, 16, 1); 
		$p17 = substr($str, 17, 1); 
		$p18 = substr($str, 18, 1); 
		$p19 = substr($str, 19, 1); 
		
		if($s == "true") $s = '1';
		if($s == "false") $s = '0';
		
		if($p == '0'){ $p0 = $s; }
		if($p == '1'){ $p1 = $s; }
		if($p == '2'){ $p2 = $s; }
		if($p == '3'){ $p3 = $s; }
		if($p == '4'){ $p4 = $s; }
		if($p == '5'){ $p5 = $s; }
		if($p == '6'){ $p6 = $s; }
		if($p == '7'){ $p7 = $s; }
		if($p == '8'){ $p8 = $s; }
		if($p == '9'){ $p9 = $s; }
		if($p == '10'){ $p10 = $s; }
		if($p == '11'){ $p11 = $s; }
		if($p == '12'){ $p12 = $s; }
		if($p == '13'){ $p13 = $s; }
		if($p == '14'){ $p14 = $s; }
		if($p == '15'){ $p15 = $s; }
		if($p == '16'){ $p16 = $s; }
		if($p == '17'){ $p17 = $s; }
		if($p == '18'){ $p18 = $s; }
		if($p == '19'){ $p19 = $s; }
		
		file_put_contents("C:\\tmp\conf\b1.output", $p0.$p1.$p2.$p3.$p4.$p5.$p6.$p7.$p8.$p9.$p10.$p11.$p12.$p13.$p14.$p15.$p16.$p17.$p18.$p19);
	}

//echo $rest;