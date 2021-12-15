<HTML>
  
   <BODY>
     
      <?php

        function cuadrado($simbolo,$filas) {

            for ($i=1;$i<=$filas;$i++) {
            
                echo str_repeat($simbolo, $filas),"\n";
                
            }

        }

        echo cuadrado("a",4), "\n";
        echo cuadrado("b",3), "\n";
        echo cuadrado("c",2), "\n";
        echo cuadrado("d",5), "\n";
        echo cuadrado("o",9), "\n";
        echo cuadrado("*",3), "\n";
        echo cuadrado("#",4), "\n";

      ?>
     
   </BODY>

</HTML>

