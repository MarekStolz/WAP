<!DOCTYPE html>
<html> 
<head> 
  <title>Sachovnice</title>
  </head>
  <body> 
   
   <table style="margin-left:auto;margin-right:auto;margin-top:auto;" cellpadding="10px" border="2px">
      <?php
      for($x=0;$x<=7;$x++)
      {
          echo "<tr>";
          for($y=1;$y<=8;$y++)
          {
          $total=$x+$y;
          if($total%2==0)
          {
          echo "<td height='80px' width='80px' bgcolor='white'></td>";
          }
          else
          {
          echo "<td height='80px' width='80px' bgcolor='black'></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
</body>
</html>
