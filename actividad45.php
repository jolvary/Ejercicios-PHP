<HTML>
  
   <BODY>
     
      <?php

        function pinv($simbolo,$filas) {

            for ($i=$filas;$i>0;$i--) {
            
                echo str_repeat($simbolo, $i),"\n";
                
            }

        }

        echo pinv("a",4), "\n";
        echo pinv("b",3), "\n";
        echo pinv("c",2), "\n";
        echo pinv("d",5), "\n";
        echo pinv("o",9), "\n";
        echo pinv("*",3), "\n";
        echo pinv("#",4), "\n";

      ?>
     
   </BODY>

</HTML>

