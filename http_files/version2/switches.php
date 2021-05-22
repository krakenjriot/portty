<?php	$config = include 'config'; ?>

<html>
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script type="text/javascript"     src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script type="text/javascript">window.jQuery || document.write('<script src="classes/commons/jquery/jquery-1.7.1.min.js"><\/script>')</script>
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
      <script src="http://malsup.github.com/jquery.form.js"></script> 
   
   
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>   
   
   </head>
   <body>
     
      <form id="myForm" name="myForm" method="POST">
	 
	  
	  
	  
         <table>

			
       
			
            <tr>
               <td><h2>Board Name: <?php echo $config['board_name']; ?></h2></td>   
               <td></td>
				<td></td>			   
            </tr>

			
            <tr>
               <td><a href="?p=1"><label>Back to Main Page</label></a></td>   
               <td></td>
				<td></td>			   
            </tr>
			
			<tr>
               <th>Device</th>               
               <th>Switch</th>
               <th>Description</th>
            </tr>
			
            <tr>
				<td><label for="switch0"><?php echo $config['name0']; ?></label></td>       
				<td><input type="checkbox" name="switch_name0" id="switch0" data-toggle="toggle" data-off="p0" data-on="p0" <?php echo toggle_state(0); ?> disabled></td>
				<td><?php echo $config['desc0']; ?></td>
            </tr>

            <tr>
				<td><label for="switch1"><?php echo $config['name1']; ?></label></td>      
				<td><input type="checkbox" name="switch_name1" id="switch1" data-toggle="toggle" data-off="p1" data-on="p1" <?php echo toggle_state(1); ?> disabled></td>
				<td><?php echo $config['desc1']; ?></td>
            </tr>
			
            <tr>
				<td><label for="switch2"><?php echo $config['name2']; ?></label></td>        
				<td><input type="checkbox" name="switch_name2" id="switch2" data-toggle="toggle" data-off="p2" data-on="p2" <?php echo toggle_state(2); ?> disabled></td>
				<td><?php echo $config['desc2']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch3"><?php echo $config['name3']; ?></label></td>        
				<td><input type="checkbox" name="switch_name3" id="switch3" data-toggle="toggle" data-off="p3" data-on="p3" <?php echo toggle_state(3); ?> disabled></td>
				<td><?php echo $config['desc3']; ?></td>
            </tr>			
			
			
            <tr>
				<td><label for="switch4"><?php echo $config['name4']; ?></label></td>        
				<td><input type="checkbox" name="switch_name4" id="switch4" data-toggle="toggle" data-off="p4" data-on="p4" <?php echo toggle_state(4); ?> ></td>
				<td><?php echo $config['desc4']; ?></td>
            </tr>			
			
			
            <tr>
				<td><label for="switch5"><?php echo $config['name5']; ?></label></td>        
				<td><input type="checkbox" name="switch_name5" id="switch5" data-toggle="toggle" data-off="p5" data-on="p5" <?php echo toggle_state(5); ?> ></td>
				<td><?php echo $config['desc5']; ?></td>
            </tr>			
			
			
            <tr>
				<td><label for="switch6"><?php echo $config['name6']; ?></label></td>        
				<td><input type="checkbox" name="switch_name6" id="switch6" data-toggle="toggle" data-off="p6" data-on="p6" <?php echo toggle_state(6); ?> ></td>
				<td><?php echo $config['desc6']; ?></td>
            </tr>			
			
			
            <tr>
				<td><label for="switch7"><?php echo $config['name7']; ?></label></td>        
				<td><input type="checkbox" name="switch_name7" id="switch7" data-toggle="toggle" data-off="p7" data-on="p7" <?php echo toggle_state(7); ?> ></td>
				<td><?php echo $config['desc7']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch8"><?php echo $config['name8']; ?></label></td>        
				<td><input type="checkbox" name="switch_name8" id="switch8" data-toggle="toggle" data-off="p8" data-on="p8" <?php echo toggle_state(8); ?> ></td>
				<td><?php echo $config['desc8']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch9"><?php echo $config['name9']; ?></label></td>        
				<td><input type="checkbox" name="switch_name9" id="switch9" data-toggle="toggle" data-off="p9" data-on="p9" <?php echo toggle_state(9); ?> ></td>
				<td><?php echo $config['desc9']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch10"><?php echo $config['name10']; ?></label></td>        
				<td><input type="checkbox" name="switch_name10" id="switch10" data-toggle="toggle" data-off="p10" data-on="p10" <?php echo toggle_state(10); ?> ></td>
				<td><?php echo $config['desc10']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch11"><?php echo $config['name11']; ?></label></td>        
				<td><input type="checkbox" name="switch_name11" id="switch11" data-toggle="toggle" data-off="p11" data-on="p11" <?php echo toggle_state(11); ?> ></td>
				<td><?php echo $config['desc11']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch12"><?php echo $config['name12']; ?></label></td>        
				<td><input type="checkbox" name="switch_name12" id="switch12" data-toggle="toggle" data-off="p12" data-on="p12" <?php echo toggle_state(12); ?> ></td>
				<td><?php echo $config['desc12']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch13"><?php echo $config['name13']; ?></label></td>        
				<td><input type="checkbox" name="switch_name13" id="switch13" data-toggle="toggle" data-off="p13" data-on="p13" <?php echo toggle_state(13); ?> ></td>
				<td><?php echo $config['desc13']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch14"><?php echo $config['name14']; ?></label></td>        
				<td><input type="checkbox" name="switch_name14" id="switch14" data-toggle="toggle" data-off="p14" data-on="p14" <?php echo toggle_state(14); ?> ></td>
				<td><?php echo $config['desc14']; ?></td>
            </tr>			
			
            <tr>
				<td><label for="switch15"><?php echo $config['name15']; ?></label></td>        
				<td><input type="checkbox" name="switch_name15" id="switch15" data-toggle="toggle" data-off="p15" data-on="p15" <?php echo toggle_state(15); ?> ></td>
				<td><?php echo $config['desc15']; ?></td>
            </tr>

            <tr>
				<td><label for="switch16"><?php echo $config['name16']; ?></label></td>        
				<td><input type="checkbox" name="switch_name16" id="switch16" data-toggle="toggle" data-off="p16" data-on="p16" <?php echo toggle_state(16); ?> ></td>
				<td><?php echo $config['desc16']; ?></td>
            </tr>

            <tr>
				<td><label for="switch17"><?php echo $config['name17']; ?></label></td>        
				<td><input type="checkbox" name="switch_name17" id="switch17" data-toggle="toggle" data-off="p17" data-on="p17" <?php echo toggle_state(17); ?> ></td>
				<td><?php echo $config['desc17']; ?></td>
            </tr>

            <tr>
				<td><label for="switch18"><?php echo $config['name18']; ?></label></td>        
				<td><input type="checkbox" name="switch_name18" id="switch18" data-toggle="toggle" data-off="p18" data-on="p18" <?php echo toggle_state(18); ?> ></td>
				<td><?php echo $config['desc18']; ?></td>
            </tr>

            <tr>
				<td><label for="switch19"><?php echo $config['name19']; ?></label></td>        
				<td><input type="checkbox" name="switch_name19" id="switch19" data-toggle="toggle" data-off="p19" data-on="p19" <?php echo toggle_state(19); ?> ></td>
				<td><?php echo $config['desc19']; ?></td>
            </tr>

         		
			
            <tr>
               <td><a href="?p=1"><label>Back to Main Page</label></a></td>   
               <td></td>
				<td></td>			   
            </tr>

















			
         </table>
      </form>
      </div>
      <div></div>
      <script>
         $('#switch0').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=0&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 
 
         $('#switch1').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=1&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch2').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=2&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch3').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=3&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch4').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=4&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch5').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=5&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch6').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=6&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch7').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=7&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch8').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=8&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch9').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=9&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch10').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=10&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch11').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=11&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch12').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=12&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch13').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=13&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch14').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=14&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch15').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=15&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch16').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=16&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch17').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=17&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch18').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=18&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

         $('#switch19').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'?p=0',
                data:'pn=19&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 

     

			
        			
      </script>
   </body>
</html>