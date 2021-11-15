<HTML>
  
   <BODY>
     
      <?php

        $num = mt_rand(1,50);
        $i = 2;
        $nump = 0;

        while ($num > $i) {
            if ($num % $i == 0) {
                $nump = 1;
            }
            $i++;
        }

        if ($nump == 0)
            echo "El número $num es primo.";
        else
            echo "El número $num no es primo.";
        
      ?>
     
   </BODY>

</HTML>