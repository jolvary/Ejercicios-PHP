<HTML>
  
   <BODY>
     
      <?php
      
        $num = mt_rand(1,50);
        $i = 1;
        echo "Los divisores de $num son: ";

        while ($i <= $num) {
            if($num % $i == 0) {
                echo "$i, ";
            }
            $i++;
        }


        
      ?>
     
   </BODY>

</HTML>