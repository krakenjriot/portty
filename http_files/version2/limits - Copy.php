<?php

?>
<!DOCTYPE html>
<html>
<head><title></title>

<script src="https://code.jquery.com/jquery-1.12.4.js"
	integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
	crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
<link href="../style.view.css" rel="stylesheet">

<!--#############################################################################-->
<!--#############################################################################-->
<script>//device initial update
$(document).ready(function() {
     var refresh = function () {
	//uptime.php p4	 
	$('#sensor_data0').load('api/?p=4&s=<?php echo $session_id; ?>&ty=<?php echo $type; ?>');
     }
     setInterval(refresh, 1000);
     refresh();
});

<!--#############################################################################-->

</script>

</head>

<body>
	
		<div class="col-md-6 no-gutters">
			<div class="hbd d-flex justify-content-center align-items-center">
				<table cellpadding=0 cellspacing=0 border=0>
				<tr><td><i class="fa fa-heartbeat fa-5x" aria-hidden="true"></i></td></tr>
				<tr><td><b style="font-size: 26px">Heartbeat Delay</b></td></tr>
				<tr><td><div id="sensor_data0" style="font-size: 26px">Loading...</div></td></tr>			
				</table>			
			</div>
		</div>

		
	
	</br>
</body>
</html>
