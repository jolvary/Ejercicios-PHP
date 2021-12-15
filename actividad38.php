<HTML>
  
   <BODY>
     
      <?php
      
        $num = 87;
        $nump = "El número es primo";

        for ($i=2;$i<$num;$i++) {

            if ($num % $i == 0) {

                $nump = "El número no es primo";
                break;

            }

        }

        echo $nump;

      ?>
     
   </BODY>

</HTML>