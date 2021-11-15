<HTML>
  
   <BODY>
     
      <?php
      
        $first = 0;
        $second = 1;

        for ($i=0;$i<20;$i++) {
            echo " ",$first, " ",$second;
            $first = $second + $first;
            $second = $second + $first;
        }        
      ?>
     
   </BODY>

</HTML>

0 1 - 1 2 - 3 5