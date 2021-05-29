<?php 
	$config = include 'config';		
	echo "<h2>".nl2br(file_get_contents($config['conf_dir']."\\".$config['board_name'].".input"))."</h2>";


