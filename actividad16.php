<HTML>
  
   <BODY>
     
      <?php
      
        $contraseña = "AveMaria";
        $acceso = 0;

        if ($contraseña == "AveMaria") {
            echo "La contraseña es correcta.";
            $acceso = 1;
        } else {
            echo "La contraseña es incorrecta.";
        }
        
        if ($acceso != 1) {
            echo "<br><br>Acceso denegado!";
        } else {
            echo "<br><br>Acceso permitido!";
        }

      ?>
     
   </BODY>

</HTML>