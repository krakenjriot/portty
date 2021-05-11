<?php include_once("functions.php"); ?>
<html>
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script type="text/javascript"     src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script type="text/javascript">window.jQuery || document.write('<script src="classes/commons/jquery/jquery-1.7.1.min.js"><\/script>')</script>
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
      <script src="http://malsup.github.com/jquery.form.js"></script> 
   </head>
   <body>
      </br>
      <form id="myForm" name="myForm" method="POST">
	  </br>
         <table>
            <tr>
               <th>Device</th>
               <th>&nbsp;&nbsp;</th>
               <th>Switch</th>
            </tr>
            <tr>
               <td><label class="form-label" for="PIN8">Water Pump</label></td>
               <td>&nbsp;&nbsp;</td>
               <td><input type="checkbox" name="PIN8" id="mybutton8" data-toggle="toggle" data-off="P8" data-on="P8" <?php echo toggle_state(8); ?> ></td>
            </tr>
            <tr>
            </tr>
            <tr>
               <td><label class="form-label" for="PIN9">Kitchen Lights</label></td>
               <td>&nbsp;&nbsp;&nbsp;</td>
               <td><input type="checkbox" name="PIN9" id="mybutton9" data-toggle="toggle" data-off="P9" data-on="P9" <?php echo toggle_state(9); ?> ></td>
            </tr>
            <tr>
            </tr>
            <tr>
               <td><label class="form-label" for="PIN10">Living Room Lights</label></td>
               <td>&nbsp;&nbsp;&nbsp;</td>
               <td><input type="checkbox" name="PIN10" id="mybutton10" data-toggle="toggle" data-off="P10" data-on="P10" <?php echo toggle_state(10); ?> ></td>
            </tr>
         </table>
      </form>
      </div>
      <div></div>
      <script>
         $('#mybutton8').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'api.php?',
                data:'p=8&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	 
         
         $('#mybutton9').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'api.php?',
                data:'p=9&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });	
         
         $('#mybutton10').change(function(){
              var mode = $(this).prop('checked');   
              $.ajax({
                type:'POST',
                dataType:'text',
                url:'api.php?',
                data:'p=10&s=' + mode,
                success:function(data)
                {
                 //nothing
                }
              });
            });				
      </script>
   </body>
</html>