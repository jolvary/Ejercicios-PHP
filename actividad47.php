<HTML>
  
   <BODY>
     
      <?php

        function cuadrado($filas,$simbolo = '*') {

            for ($i=1;$i<=$filas;$i++) {
            
                echo str_repeat($simbolo, $filas),"\n";
                
            }

        }

        echo cuadrado(4), "\n";
        echo cuadrado(3,"a"), "\n";
        echo cuadrado(2,"c"), "\n";
        echo cuadrado(5,"d"), "\n";
        echo cuadrado(9), "\n";
        echo cuadrado(3,"*"), "\n";
        echo cuadrado(4,"#"), "\n";

      ?>
     
   </BODY>

</HTML>