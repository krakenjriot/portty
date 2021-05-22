<?php

function toggle_state($x){
	
	$config = include 'config';
	$str = file_get_contents($config['conf_dir']."\\".$config['board_name'].".output");
	
	$result = substr($str, $x, 1); 
	
	if($result == '1') return "checked";
	if($result == '0') return "";
	
}


function update_pin($pn, $s)
	{
		$config = include 'config';
		$str = file_get_contents($config['conf_dir']."\\".$config['board_name'].".output");
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
		
		if($pn == '0'){ $p0 = $s; }
		if($pn == '1'){ $p1 = $s; }
		if($pn == '2'){ $p2 = $s; }
		if($pn == '3'){ $p3 = $s; }
		if($pn == '4'){ $p4 = $s; }
		if($pn == '5'){ $p5 = $s; }
		if($pn == '6'){ $p6 = $s; }
		if($pn == '7'){ $p7 = $s; }
		if($pn == '8'){ $p8 = $s; }
		if($pn == '9'){ $p9 = $s; }
		if($pn == '10'){ $p10 = $s; }
		if($pn == '11'){ $p11 = $s; }
		if($pn == '12'){ $p12 = $s; }
		if($pn == '13'){ $p13 = $s; }
		if($pn == '14'){ $p14 = $s; }
		if($pn == '15'){ $p15 = $s; }
		if($pn == '16'){ $p16 = $s; }
		if($pn == '17'){ $p17 = $s; }
		if($pn == '18'){ $p18 = $s; }
		if($pn == '19'){ $p19 = $s; }		
		file_put_contents($config['conf_dir']."\\".$config['board_name'].".output", $p0.$p1.$p2.$p3.$p4.$p5.$p6.$p7.$p8.$p9.$p10.$p11.$p12.$p13.$p14.$p15.$p16.$p17.$p18.$p19);
	}

//echo $rest;