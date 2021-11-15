<HTML>
  
   <BODY>
     
      <?php
      
        $mastot = 23;
        $numper = 7;

        

        echo "Mascarillas por persona: ", (int)($mastot / $numper);
        echo "<br>Mascarillas restantes: ", (int)($mastot % $numper);

      ?>
     
   </BODY>

</HTML>