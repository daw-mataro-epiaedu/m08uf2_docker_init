<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
 $(document).ready(function(){
     setInterval(ajaxcall, 1000);
 });
 function ajaxcall(){
     $.ajax({
         url: 'gettime.php',
         success: function(data) {
             data = data.split(':');
             $('#hora').html(data[0]);
             $('#minuts').html(data[1]);
             $('#segons').html(data[2]);
         }
     });
 }
</script>

<?php
echo "<h1>Hora del sistema</h1>";
echo 
'<span id="hora">0</span>:<span id="minuts">0</span>:<span id="segons">0</span>';
?>