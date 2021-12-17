<HTML>
  
   <BODY>
     
      <?php

        function media($num1,$num2,$num3,$num4) {

            $media = ($num1 + $num2 + $num3 + $num4) / 4;

            $resultado = "La media de $num1, $num2, $num3 y $num4 es: $media";

            return $resultado;

        }

        echo media(7,34,631,1), "\n";
        echo media(9,0,4,231), "\n";
        echo media(34,856,243,86), "\n";
        echo media(87,15,7,8), "\n";
        echo media(91,5,36,4), "\n";
        echo media(13,5,8,9), "\n";
        echo media(243,487,89,6), "\n";

      ?>
     
   </BODY>

</HTML>