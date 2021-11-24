<HTML>
  
   <BODY>

      <?php

         $dbhost = "localhost";
         $dbuser = "alvaro";
         $dbpass = "Rsy89AFLY7@QkMHF";

         $conn = new mysqli($dbhost, $dbuser, $dbpass);
         
         $result = mysqli_query($conn,"SHOW DATABASES");
         $row = mysqli_fetch_array($result);
         echo "Mi base de datos es: ", $row[0], ".";
         echo "<br><br> Y mi usuario es $dbuser."
         
      ?>
     
   </BODY>

</HTML>