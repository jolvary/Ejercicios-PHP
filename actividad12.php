<HTML>
  
   <BODY>
     
      <?php
      
        $nlot = "";

        for ($i = 1; $i <= 5; $i++) {
            $random = mt_rand(1,50);
            $nlot .= "$random ";
        }

        for ($i = 1; $i <= 2; $i++) {
            $random = mt_rand(1,9);
            $nlot .= "$random ";
        }

        echo "El número premiado es el: $nlot";

      ?>
     
   </BODY>

</HTML>