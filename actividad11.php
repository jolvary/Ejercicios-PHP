<HTML>
  
   <BODY>
     
      <?php
      
      $x = 7;
      $y = 14;
      $z = $x++ + $y;

      echo "X = $x, Y = $y, Z = $z <br>";

      $cuenta = 12;

      if ($cuenta > 10) {
        echo "Cuenta es mayor que 10.<br>";
      }

      $total = 77;
      $x = 2;

      echo "Total = $total, X = $x, Nuevo total = ", $total = $total - --$x;

      $q = 8;
      $divisor = 7;
      $q = $q % $divisor;

      echo "<br>Divisor = $divisor, Nueva Q = $q";

      ?>
     
   </BODY>

</HTML>