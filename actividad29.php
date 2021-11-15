<HTML>
  
   <BODY>
     
      <?php
      
        $estrella = 0;
        while ($estrella <= 6) {
            $column = 0;
            echo "<br>";
            while ($column <= $estrella) {
                echo "* ";
                $column++;
            }
            $estrella++;
        }
        
      ?>
     
   </BODY>

</HTML>