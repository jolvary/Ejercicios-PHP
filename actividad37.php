<HTML>
  
   <BODY>
     
      <?php
      
        $num = 16;

        echo "Los divisores de $num son: ";

        for ($i=1;$i<=$num;$i++) {
            
            if ($num%$i == 0) {
                echo "$i ";
            }

        }        
      ?>
     
   </BODY>

</HTML>