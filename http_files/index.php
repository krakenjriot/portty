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
         <label class="form-label" for="PIN8">----->PIN #8)</label>	
         <input type="checkbox" name="PIN8" id="mybutton" data-toggle="toggle" data-off="OFF" data-on="ON" <?php echo toggle_state(8); ?> >
      </form>
      </div>
      <div></div>
      <script>
         $('#mybutton').change(function(){
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
      </script>
   </body>
</html>